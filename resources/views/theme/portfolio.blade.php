<!--Portfolio-->
<section id="portfolio" class="page-section section appear clearfix secPad">
    <div class="container">

        <div class="heading text-center">
            <!-- Heading -->
            <h2>Portfolio</h2>
            <p>At lorem Ipsum available, but the majority have suffered alteration in some form by injected humour.</p>
        </div>

        <div class="row">
            <nav id="filter" class="col-md-12 text-center">
                <ul>
                    <li><a href="#" class="current btn-theme btn-small" data-filter="*">All</a></li>
                    <li><a href="#" class="btn-theme btn-small" data-filter=".web_app" >Web Application</a></li>
                    <li><a href="#" class="btn-theme btn-small" data-filter=".android_app" >Android Applications</a></li>
                </ul>
            </nav>

            <div class="portfolio-items isotopeWrapper clearfix" id="3" >
                <div style="overflow-x:auto; background-color: white;" class="col-sm-12 isotopeItem  android_app">
                    <br/>
                    <h2> Android Applications </h2>
                    <br/>
                    @if(count($applications) > 0)
                        <table class="w3-table w3-striped table-responsive" >
                            <tr>
                                <th> Name </th>
                                <th> Description </th>
                                <th style="text-align: center;"> Image </th>
                                <th> URL </th>
                            </tr>
                            @foreach($applications as $application)
                                <tr>
                                    <td>
                                        <a href="{{ route('show', ['id' => $application->id]) }}">
                                            {{ $application->name }}
                                        </a>
                                    </td>
                                    <td>
                                    {!! mb_strimwidth($application->desc, 0, 50, "...")  !!}
                                    <td style="text-align: center;">
                                        <img src="{{ asset('/images/apps/'.$application->img) }}" alt="{{$application->name}}" title="{{$application->name}}"  style="width: 30%; text-align: center;"/>
                                        <div class="portfolio-desc align-center">
                                            <div class="folio-info">
                                                <a href="{{ asset('images/apps/'.$application->img) }}" class="fancybox" style="width: 30%; height: 30%;">
                                                    <i class="fa fa-arrows-alt fa-1x"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="{{ $application->url }}">{{ $application->url }}</a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                        <br/>
                        <div class="center" >
                            <div class="pagination">

                                @if($applications->lastPage() > 1)
                                    @if($applications->currentPage() !== 1)
                                        <a href="{{ $applications->url(($applications->currentPage() - 1)) }}">{!! Lang::get('pagination.previous') !!} </a>
                                    @endif

                                    @for($i = 1; $i <= $applications->lastPage(); $i++)
                                        @if($applications->currentPage() == $i)
                                            <a class="selected active disabled">{{ $i }}</a>
                                        @else
                                            <a href="{{ $applications->url($i) }}">{{ $i }}</a>
                                        @endif
                                    @endfor

                                    @if($applications->currentPage() !== $applications->lastPage())
                                        <a href="{{ $applications->url(($applications->currentPage() + 1)) }}">{!! Lang::get('pagination.next') !!} </a>
                                    @endif
                                @endif
                            </div>
                        </div>
                    @else
                        <p> No application added ... </p>
                    @endif
                </div>
            </div>

            <br/>
            <br/>
            <div class="portfolio-items isotopeWrapper clearfix" id="4" >
                <div style="overflow-x:auto; background-color: white;" class="col-sm-12 isotopeItem web_app">
                    <br/>
                    <h2> Web Applications </h2>
                    <br/>
                    @if(count($webapps) > 0)
                        <table class="w3-table w3-striped table-responsive" >
                            <tr>
                                <th> Name </th>
                                <th> Description </th>
                                <th style="text-align: center;"> Image </th>
                                <th> URL </th>
                            </tr>
                            @foreach($webapps as $application)
                                <tr>
                                    <td>
                                        <a href="{{ route('show', ['id' => $application->id]) }}">
                                            {{ $application->name }}
                                        </a>
                                    </td>
                                    <td>
                                    {!! mb_strimwidth($application->desc, 0, 50, "...")  !!}
                                    <td style="text-align: center;">
                                        <img src="{{ asset('/images/apps/'.$application->img) }}" alt="{{$application->name}}" title="{{$application->name}}"  style="width: 30%; "/>
                                        <div class="portfolio-desc align-center">
                                            <div class="folio-info">
                                                <a href="{{ asset('images/apps/'.$application->img) }}" class="fancybox" style="width: 30%; height: 30%;">
                                                    <i class="fa fa-arrows-alt fa-1x"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="{{ $application->url }}">{{ $application->url }}</a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                        <br/>
                        <div class="center">
                            <div class="pagination">

                                @if($webapps->lastPage() > 1)
                                    @if($webapps->currentPage() !== 1)
                                        <a href="{{ $webapps->url(($webapps->currentPage() - 1)) }}">{!! Lang::get('pagination.previous') !!} </a>
                                    @endif

                                    @for($i = 1; $i <= $webapps->lastPage(); $i++)
                                        @if($webapps->currentPage() == $i)
                                            <a class="selected active disabled">{{ $i }}</a>
                                        @else
                                            <a href="{{ $webapps->url($i) }}">{{ $i }}</a>
                                        @endif
                                    @endfor

                                    @if($webapps->currentPage() !== $webapps->lastPage())
                                        <a href="{{ $webapps->url(($webapps->currentPage() + 1)) }}">{!! Lang::get('pagination.next') !!} </a>
                                    @endif
                                @endif
                            </div>
                        </div>
                    @else
                        <p> No application added ...</p>
                    @endif
                </div>
            </div>

        </div>
    </div>
</section>
