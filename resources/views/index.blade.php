<!DOCTYPE html>
<html>

<head>
    <title>IMDB design</title>
    <link rel="stylesheet" href="{{ url('s3.css')}}" />
    <link rel="stylesheet" href="http://localhost/laravel/imdb/resources/css/s3.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Paytone+One&family=Roboto+Condensed:ital,wght@0,700;1,700&display=swap" rel="stylesheet">
</head>

<body>
    <!-- header starts here -->
    <div class="header">
        <div class="innerheader">
            <div class="text"><img src="{{ url('imdb-logo.jpg') }}" class="text5"></div>
            <ul>
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropbtn">menu</a>
                    <div class="dropdown-content">
                        <a href="#">Movies</a>
                        <a href="#">Cartoons</a>
                        <a href="#">TvSeries</a>
                        <a href="#">Shows</a>
                        <a href="#">Awards<span>and</span><span>Events</span></a>
                        <a href="#">Community</a>
                    </div>
                </li>
            </ul>
            <form method="Post" action="{{url('serach-submit')}}">
                @csrf
                <input type="text" name="item" placeholder="Search IMDb" class="input">
                <input type="submit" name="search" value="Search" class="search">
            </form>
            <div class="text6">IMDb<span>Pro</span></div>
            <div class="line"></div>
            <div class="text7"><span>watchlist</span></div>
            <div class="text7"><span>sign in </span></div>
            <div class="text7"><select>
                    <option value="" selected>EN</option>
                    <option value="public">English</option>
                    <option value="private">Punjabi</option>
                    <option value="private">Hindi</option>
                </select></div>
        </div>
    </div>
    <!-- header ends here -->
    <!-- div for displaying search items -->
    <div class="main">
        <!-- div for centerlised-->
        <div class="main1">
        <!-- dd() -->
        @for ($m = 0; $m < 9; $m++) 
       
            <div class="small">
           @if (!empty($deco['d'][$m]['i']['imageUrl']))
           <a href="{{url('overview').$deco['d'][$m]['id'] }}"><img src="{{ $deco['d'][$m]['i']['imageUrl'] }}" alt="" height="470px" width="400px">
           </a> 
        @else
       <img src="{{ url('pic.jpg') }}" alt="" height="470px" width="400px">
       
        @endif
   
        <div class="title"><label>Movie : </label>
        @if (!empty($deco['d'][$m]['l']))
           {{ $deco['d'][$m]['l'] }}
           @endif
        </div>
        <div class="title2"><label>Actors : </label>
         @if (!empty($deco['d'][$m]['s']))
           {{ $deco['d'][$m]['s'] }}
           @endif
        </div>
        <div class="title2"><label>Published Year : </label>
        @if (!empty($deco['d'][$m]['y']))
         {{ $deco['d'][$m]['y'] }}
         @endif
        </div>
        </div>
        @endfor
        
    </div>
  
          

</div>
</div>
</body>

</html>