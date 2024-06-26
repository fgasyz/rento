   <div class="card justify-content-center align-items-center p-4 m-2" style="width: 18rem;">
        <img src={{ $car['image'] ?? 'images/car.png' }} class="card-img-top mt-5 img-fluid" alt="...">
        <div class="card-body w-100">
            <h5 class="card-title text-center my-4 text-grey">{{ $car['no_plat'] ?? 'CBDRE' }}</h5>
            <div class="d-flex justify-content-between">
                <p class="card-text">Merk</p>
                <p class="card-text">{{ $car['merk'] ?? 'merk'}}</p>
            </div>
            <hr>
            <div class="d-flex justify-content-between">
                <p class="card-text">Model</p>
                <p class="card-text">{{ $car['model'] ?? 'model'}}</p>
            </div>
            <div class="mt-4">
                <h6 class="text-center">Rp. {{ $car['tarif_rental'] ?? '250.000' }},- / Hari</h6>
            </div>
        </div>
        <div class="d-flex w-100">
            <a href="/dashboard/addrentalcar/{{ $car['no_plat'] }}" class=" btn d-block w-100"><button class="btn w-100 text-dark" style="background-color: #f6d601;">Sewa</button></a>
        </div>
    </div>
