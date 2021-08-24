<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
        <meta name="author" content="Creative Tim">
        <title>Add Questions</title>
        <!-- Favicon -->
        <link rel="icon" href="assets/img/brand/favicon.png" type="image/png">
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
        <!-- Icons -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
              
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('css/custom/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/admin/nucleo.css') }}" type="text/css">
        <!-- Page plugins -->
        <!-- Argon CSS -->
        <link rel="stylesheet" href="{{ asset('css/admin/admin.css') }}" type="text/css">
      </head>
<body>

<div class="container">

    <div class="col-sm-8 m-auto">
        <div class="card bg-default">
          <div class="card-header bg-transparent">
            

              
                    <ul class="nav nav-pills justify-content-start mb-3">
                      <li class="nav-item">
                        
                        <a href="/admin" class="btn btn-sm btn-neutral">Dashboard</a>
                        </a>
                      </li>
                    </ul>
                 


           
     
                <h3 class="h3 text-white mb-0 text-center">Adding question to:</h3>
                <h2 class="h2 text-white mb-0 text-center"><strong class='text-warning'>"{{ $cat->category }}"</strong></h2>
                <h3 class="h3 text-white mb-1 text-center border-bottom border-primary pb-2"></strong>section</h3>
                
             

              
              
            
          </div>
          <div class="card-body">
            <!-- Chart -->
            <div class="">
             
                
                <form action="/add_question/{{ $cat->id }}" method="POST">
                    @csrf
        
                    
                           
                    <div class="form-group">
                        <input type="text" class="form-control" name="question" id="question" placeholder="FAQ category" required="required">
                    </div>
        
                    <div class="form-group">
                        <textarea class="form-control" name="answer" id="answer" placeholder="FAQ category" required="required"></textarea>
                        
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">SAVE</button>
                    </div>
                       
                </form>
              
            

            </div>
          </div>
        </div>

        @if(session()->has('success'))
        <div class="alert alert-success">
            <div class="row">
            <div class="col-sm-11"> {{ session()->get('success') }} <span class="text-dark">{{ $cat->category }}</span></div>
            <div class="col-sm-1" ><a href="/create_qus/{{ $cat->id }}">close</a></div>
            </div>
        </div>
        @endif

      </div>

</div>


  
    
</body>
</html>