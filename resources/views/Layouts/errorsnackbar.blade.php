<div class = "snack-container">
@if(count($errors) > 0)
    @foreach ($errors->all() as $error)
        <div class = "snack error" id ="snack{{$loop->index}}" onclick="closesnack({{$loop->index}})">
            <div class = "snack-close">
                    x
            </div>
            <div class = "snack-message">
            {{$error}}
            </div>
        </div>
    @endforeach
@endif

@if (session('success'))
    <div class = "snack success" id="snacksuccess" onclick="closesnack('success')">
        <div class = "snack-close">
                x
        </div>
        <div class = "snack-message">
            {{ session('success') }}
        </div>
    </div>
@endif

@if (session('error'))
    <div class = "snack error" id="snackerror" onclick="closesnack('error')" >
        <div class = "snack-close">
                x
        </div>
        <div class = "snack-message">
            {{ session('error') }}
        </div>
    </div>
@endif
</div>


<script>
    function closesnack(x){
        var elem = document.getElementById('snack'+x);
        elem.classList.add("snack-hide");
        
    }
</script>