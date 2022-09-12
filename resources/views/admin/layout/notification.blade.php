<style>
    .alert{
        position: fixed;
        padding:1rem 1rem;
        top: 19%;
        margin-bottom: 1rem;
        right: 50%;
        transform: translateX(50%);
        border: 1px solid;
        border-radius: 0.25rem;
        animation-name: example;
        animation-duration:1s;
        animation-iteration-count: infinite;
    }
    .alert-success, alert-danger{
        color: #000000;
        background-color: #d793a7;
        border-color: #ffffff;
    }
    @keyframes example {
        0% {top: 19%;}
        50% {top: 22%;}
        100%{top:19%;}
    }
</style>
@if (session()->has('message'))
    @if(session()->get('status'))
        <div class="alert alert-success gen-alert text-center">
            <ul class="list-unstyled my-0 py-0">
                <li ><i class="fal fa-bells notif notif-success"></i> | -{{ session()->get('message') }}</li>
            </ul>
        </div>
    @else
        <div class="alert alert-success gen-alert text-center">
            <ul class="list-unstyled my-0 py-0">
                <li><i class="fal fa-bells notif notif-success"></i> | -{{ session()->get('message') }}</li>
            </ul>
        </div>
    @endif
@endif
@if ($errors->any())
    <div class="alert alert-danger gen-alert text-center py-1">
        <ul class="list-unstyled py-0 my-0">
            @foreach ($errors->all() as $error)
                <li><i class="fal fa-bells notif notif-danger"></i> | -{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
