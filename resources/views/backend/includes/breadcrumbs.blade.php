<!-- BEGIN PAGE BAR -->
<div class="page-bar">
    <ul class="page-breadcrumb">
        @php
                $count = count($header['breadcrumb']);
                $temp = 1;
                @endphp
                @foreach($header['breadcrumb'] as $key => $value)

                    @php
                        $value = (empty($value)) ? 'javascript:;' : $value;
                    @endphp

                    @if($temp!=$count)
                        <li>
                            <a href="{{ $value }}">
                                        @if($temp == 1)
                                           {{ $key }}
                                        @else
                                        &nbsp;&nbsp;&nbsp;<i class="fa fa-circle-o"></i>{{ $key }}
                                        @endif
                            </a>
                        </li>
                    @else
                        <li>
                            &nbsp;&nbsp;&nbsp;<i class="fa fa-circle-o"></i><span>{{ $key }}</span>
                        </li>

                     @endif

            @php
                $temp = $temp+1;
            @endphp
            @endforeach

    </ul>

 </div>
 <!-- END PAGE BAR -->

 <h1 class="page-title">

</h1>
