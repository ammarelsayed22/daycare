
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="./assets/plugins/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/plugins/icons/all.min.css">
    <link rel="stylesheet" href="./assets/css/index.css">
</head>
<body>

  <div class='photo'><img src='./assets/imgs/logo.jpg' alt="logo" /></div>


    <div class='py-5'>
        <div class='container'>
            <div class='row'>
                <div class='col-lg-7 mx-auto'>

                    <form method="POST" action="{{ route('daycare.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class='row'>

                            <div class='col-md-6'>
                                <div class='input-g'>
                                    <label>Nursery Name *</label>
                                    <input type='text' id="name" name="name"  />
                                </div>
                            </div>

                            <div class='col-md-6'>
                                <div class='input-g'>
                                    <label>Nursery Id *</label>
                                    <input type='number' id="id" name="id"  />
                                </div>
                            </div>

                            <div class='col-12'>
                                <div class='input-g'>
                                    <label>Nursery Phone *</label>
                                    <input type='number' id="phone_number" name="phone_number"   />
                                </div>
                            </div>

                            <div class='col-12'>
                                <div class='input-g'>
                                    <label>Location *</label>
                                    <input type="text" id="location" name="location"  />
                                </div>
                            </div>

                            <div class='col-12'>
                                <div class='input-g'>
                                    <label>Nursery Description *</label>
                                    <textarea id="description" name="description" cols="30" rows="10"></textarea>
                                </div>
                            </div>

                            <button type="submit" class="form-btn up">Add Daycare</button>


                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="./assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="./assets/plugins/icons/all.min.js"></script>
    <script src="./assets/js/index.js"></script>
</body>
</html>
