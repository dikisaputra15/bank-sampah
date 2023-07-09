@extends('layouts.master')

@section('title','Dashboard')

@section('conten')
    
		<h6 class="mb-0 text-uppercase">Dashboard</h6>
		<hr/>

		<div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">

		<div class="col">
					<div class="card radius-10 border-start border-0 border-3 border-warning">
					   <div class="card-body">
						   <div class="d-flex align-items-center">
							   <div>
								   <p class="mb-0 text-secondary">Total Nasabah</p>
								   <h4 class="my-1 text-warning"><?php echo $nasabah; ?></h4>
							   </div>
							   <div class="widgets-icons-2 rounded-circle bg-gradient-blooker text-white ms-auto"><i class='bx bxs-group'></i>
							   </div>
						   </div>
					   </div>
					</div>
				  </div> 

				   <div class="col">
					<div class="card radius-10 border-start border-0 border-3 border-danger">
					   <div class="card-body">
						   <div class="d-flex align-items-center">
							   <div>
								   <p class="mb-0 text-secondary">Total Bank Sampah</p>
								   <h4 class="my-1 text-danger"><?php echo $bank; ?></h4>
							   </div>
							   <div class="widgets-icons-2 rounded-circle bg-gradient-bloody text-white ms-auto"><i class='bx bxs-wallet'></i>
							   </div>
						   </div>
					   </div>
					</div>
				  </div>
				</div><!--end row-->
		
	<div class="card">
	<div class="card-header bg-white">
        <h3>Maps Bank Sampah</h3>
    </div>
			<div class="card-body">
				<div id="map"></div>
			</div>
	</div>

@endsection

@push('service')
<script src="{{asset('template')}}/plugins/jquery/jquery.min.js"></script>
<script>
    var map = L.map('map').setView([-6.404714029225542,106.05509298074013], 9);

    L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Street_Map/MapServer/tile/{z}/{y}/{x}', {
        maxZoom: 20,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);

	$( document ).ready(function() {
        $.getJSON('/peta/json', function(data){
            $.each(data, function(index) {

                var hotel = L.icon({
                    iconUrl: '/img/bank.png',
                    //shadowUrl: '/img/hotel.png',

                    iconSize:     [40, 55], // size of the icon
                    shadowSize:   [40, 55], // size of the shadow
                    iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
                    shadowAnchor: [4, 62],  // the same for the shadow
                    popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
                });

                L.marker([parseFloat(data[index].lat),parseFloat(data[index].long)],{icon:hotel}).bindPopup(data[index].nama_bank).addTo(map);
            });
        });
    });
</script>
@endpush
