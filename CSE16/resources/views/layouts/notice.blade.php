<div class="col-sm-3 col-xs-12">
<div class="divider" style="height:5px;background-color:#1E8440"></div>
<span style="color:#1E8440;font-weight:bold;font-family:Tahoma;font-size:16px;">Notice Board</span>
<div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="news">
        <marquee direction="up" height="350" onmouseover="this.stop()" onmouseout="this.start()" scrollamount="2">


            @foreach($all_notice as $notice)
                <div class="media">
                    <div class="date_news" style="width: 80px;">
                        <h6>{{$notice->created_at}}</h6>
                    </div>
                    <h6 style="margin-top: auto;margin-bottom: auto"><a href="#"> {{ $notice->notice_heading }} </a></h6>
                </div>
            @endforeach


        </marquee>
        <span class="more"><a href="#">...View All</a></span>
    </div>
</div>
</div>
