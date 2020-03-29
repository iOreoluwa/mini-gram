@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
       <div class="col-md-3 col-sm-12">
            <img src="https://instagram.fabv2-1.fna.fbcdn.net/v/t51.2885-19/s150x150/83907045_1052420581793081_6589762249169043456_n.jpg?_nc_ht=instagram.fabv2-1.fna.fbcdn.net&_nc_ohc=4FyND6yPc2IAX84an6V&oh=11f8718fb9ec88e93a1a23e40978c07a&oe=5EA887E0" alt="" class="rounded-circle p-5">
       </div>
       <div class="col-md-9 col-sm-12 pt-5">
            <div><h1>{{$user->username}}</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>200</strong> posts</div>
                <div class="pr-5"><strong>20k</strong> followers</div>
                <div class="pr-5"><strong>23</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">Isaac Adegboye</div>
            <div>Tech Enthusiast</div>
            <div><a href="#">adegboye.ga</a></div>
       </div>
   </div>
   <div class="row pt-4">
       <div class="col-md-4 col-sm-12">
        <img src="https://instagram.flos1-1.fna.fbcdn.net/v/t51.2885-15/e35/s320x320/43985742_349075965841852_744146962629605151_n.jpg?_nc_ht=instagram.flos1-1.fna.fbcdn.net&_nc_cat=104&_nc_ohc=Nw41Q4dm7NwAX-MksMb&oh=4e2f914c8b6469b8bee9d38966c1bbf7&oe=5EA8ABEA" alt="" class="w-100">
       </div>
       <div class="col-md-4 col-sm-12">
        <img src="https://instagram.flos1-1.fna.fbcdn.net/v/t51.2885-15/e35/s320x320/42434837_311359069658295_6723535035247460520_n.jpg?_nc_ht=instagram.flos1-1.fna.fbcdn.net&_nc_cat=103&_nc_ohc=hC_FbNlGKVwAX_OLPBh&oh=e7ee7439ea37f928655ea68d1ba58d3d&oe=5EA8A021" alt="" class="w-100">
       </div>
       <div class="col-md-4 col-sm-12">
       <img src="https://instagram.flos1-1.fna.fbcdn.net/v/t51.2885-15/e35/s320x320/17818323_1891940877729746_3132787723098652672_n.jpg?_nc_ht=instagram.flos1-1.fna.fbcdn.net&_nc_cat=102&_nc_ohc=DL7JMAiP-9kAX_OFkt3&oh=de10be33e1d94f9b815f4114e03ad470&oe=5EA90809" alt="" class="w-100">
       </div>
   </div>
</div>
@endsection
