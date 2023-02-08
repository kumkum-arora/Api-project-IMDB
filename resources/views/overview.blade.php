<!DOCTYPE html>
<html>

<head>
    <title>imdb</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="s3.css" />
</head>

<body>
    <!-- header starts here -->
    <div class="header1">
        <div class="innerheader1">
            <!-- header ends here -->
        </div>
    </div>
    <div class="maincon">
        <div class="maincon1">
            <div class="small1">

                <img src="{{ $dec['title']['image']['url'] }}" alt="" class="image" srcset="">
            </div>
            <div class="small2">
                <div class="tit"><label>{{ $dec['title']['titleType'] }} : </label>
                   {{ $dec['title']['title']  }}
                </div>
                <div class="tit2"><label>Release date : </label>
                   @if (!empty($dec['releaseDate'])) {{ $dec['releaseDate'] }} @endif
                </div>
                <div class="tit2"><label>Ratings : </label>
                  @if (!empty($dec['ratings']['rating'])) {{ $dec['ratings']['rating'] }} @endif
                </div>
                <div class="tit2"><label>Running Time : </label>
                    @if (!empty($dec['title']['runningTimeInMinutes']))   {{ $dec['title']['runningTimeInMinutes'] }} @endif Minutes
                </div>
                <div class="tit2"><label>Overview : </label>
                   @if (!empty($dec['plotSummary']['text'])) {{ $dec['plotSummary']['text'] }} @endif
                </div>
            </div>
        </div>
    </div>
</body>

</html>