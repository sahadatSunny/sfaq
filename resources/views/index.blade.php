<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>FAQ index</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('css/custom/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/custom/signup.css') }}">
      

    </head>
<body>
      <a href="{{'/admin'}}" class="btn btn-primary">add faq</a>

      <div class="container accrodion-section mb-5">

            <h4>FAQ : <span><i class="fa fa-info-circle" aria-hidden="true"></i></span></h4>
    
        @foreach ($category->sortBy('priority') as $cat )
    
        {{-- $specialist->sortBy('description') as $oneSpecialist --}}
          
        
            <div class="accor">
              <button class="accordion">
                <span>{{ $cat->category }}</span>
              </button>
              <div class="panel">
                <!-- sub accordion -->
                  @forelse ($cat->question as $qus)
                      <div class="accor">
                        <button class="sub-accordion">
                          <span>{{ $qus->question }}</span>
                        </button>
                        <div class="sub-panel">
                          <p>{{ $qus->answer }}</p>
                        </div>
                      </div>
                  @empty
                    <p>NO questions found on this category</p>
                  @endforelse

              </div>
            </div>
        @endforeach
         
    
      </div>
    

      </body>
</html>