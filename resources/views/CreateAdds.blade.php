<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        div {
      margin-top: 10px;
      margin-bottom: 10px;
      margin-right: 20px;
      margin-left: 20px;
        }

        #navbar{
        background-color: #222831;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    
    .logo img{
        height: 50px;
    }

    .profile img{
        height: 50px;
    }

    ul{
        color: #B67300;
        display: flex;
        height: 10vh;
        /* align-items: center; */
    }
    
    li{
        list-style: none;
        margin: 0 30px;
        font-size: 25px;
    }
    
    a{
        font-weight: bolder; 
        color: #B67300;
        text-decoration: none;
        display: flex;
        align-items: center;
    }

    a:hover{
        color: #7e5102
    }
        </style>
    
    </head>
    <body>
    <div id="navbar">
        <div class="logo">
            <img src="/assets/biddie.png" alt="FotoBeedie">
        </div>

          <div>
            <ul>
            <a href="/home"><li>Home</li></a>
            <a href="/create/bid"><li>Buy Item</li></a>
            <a href="/create/adds"><li>Sell Item</li></a>
            <a href="/about"><li>about us</li></a>
            </ul>
          </div>
            
          <div class="profile">
            <a href="/dashboard"><img src="/assets/profile.svg" alt=""></a>
          </div>
          
    </div>

<form action="{{route('StoreAdds')}}" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="mb-3">
        <h1>Pasang Iklan</h1>
          <label for="NamaBarang" class="form-label">Nama Barang</label>
          <input type="text" class="form-control" id="NamaBarang" name="NamaBarang">
        </div>

        <div class="mb-3">
          <label for="HargaLimit" class="form-label">Harga Limit</label>
          <input type="text" class="form-control" id="HargaLimit" name="HargaLimit">
        </div>

        <div class="mb-3">
            <label for="FotoBarang" class="form-label">Foto Barang</label>
            <input type="file" class="form-control" id="picture" name="FotoBarang">
            @error('FotoBarang')
                <label for="">{{$message}}</label>
            @enderror
            <br>
            <!-- Button -->
        <button type="submit" class="btn btn-primary">Simpan Data iklan</button>
        </div>

</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>