<li class="dropdown messages-menu ">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="dropdownMenuLink" aria-haspopup="true" aria-expanded="false"> <i class="livicon"
                                                                   data-name="message-flag"
                                                                   data-loop="true" data-color="#42aaca"
                                                                   data-hovercolor="#42aaca"
                                                                   data-size="28"></i>
        @if($count>0)
        <span class="label bg-success">{{ $count }}</span>
            @endif
    </a>


    <ul class="dropdown-menu dropdown-messages mr-auto" aria-labelledby="dropdownMenuLink">
        @if($count>0)
        <li class="dropdown-title">{{ $count }} New Messages</li>
            @else
            <li class="dropdown-title">Nothing to show</li>
        @endif
            @isset($notifications)
                @foreach($notifications as $notification)
                    @if(\App\Models\User::where('id',$notification->user_id)->exists())
                    <li class="unread message dropdown-item">
                        <a href="{{ URL::to('admin/emails/'.$notification->id ) }}" class="message"> <i class="float-right" data-toggle="tooltip"
                                                                                                  data-placement="top" title="Mark as Read"><span
                                        class="float-right ol livicon" data-n="adjust" data-s="10"
                                        data-c="#287b0b"></span></i>
                            @if($notification->senderName->pic)
                                <img src="{!! $notification->senderName->pic !!}"
                                     class="img-fluid rounded-circle message-image" alt="icon">
                            @elseif(Sentinel::getUser()->gender === "male")
                                <img src="{{ asset('images/authors/avatar3.png') }}" alt="img" class="img-fluid rounded-circle message-image"/>
                            @elseif(Sentinel::getUser()->gender === "female")
                                <img src="{{ asset('images/authors/avatar5.png') }}" alt="img" class="img-fluid rounded-circle message-image"/>

                            @else
                                <img src="{{ asset('images/authors/no_avatar.jpg') }}" alt="img" class="img-fluid rounded-circle message-image"/>
                            @endif

                            <div class="message-body">
                                <strong>{{ $notification->senderName->first_name }} {{ $notification->senderName->last_name }}</strong>
                                <br>{{ $notification->subject }}
                                <br>
                                <small>{{ $notification->created_at->diffForHumans() }}</small>
                            </div>
                        </a>
                    </li>
                    @endif
                    @endforeach
            @endisset
        <li class="footer">
            <a href="{{ url('admin/emails/inbox') }}">View all</a>
        </li>
    </ul>
</li>
