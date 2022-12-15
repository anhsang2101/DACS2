    <div class="col-md-12 col-sm-12" id="datapaging">
        <div class="container">
            <div id="carousel-job" class="carousel slide" data-bs-ride="true">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            @if (!empty($listAll))
                            @foreach ($listAll as $key => $item)
                            <div class="col-md-4 col-sm-6 feature-job job-ta">
                                <div class="feature-job-item">
                                    <div class="cvo-flex"><a href="/ap/detail-job/{{ $item->id }}" tabindex="-1">
                                            <div class="box-company-logo"><img title="" alt="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" src="{{ url('img/company1.png') }}" class="img-responsive"></div>
                                        </a>
                                        <div class="col-title cvo-flex-grow"><a data-toggle="tooltip" title="" data-placement="top" href="/ap/detail-job/{{ $item->id }}" target="_blank" class="title text_ellipsis" data-original-title="Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)" tabindex="-1">
                                                <strong class="underline-box-job" style="font-weight: bold;">
                                                    {{ $item->title }}
                                                </strong>
                                            </a> <a href="/ap/detail-job/{{ $item->id }}" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="text-silver company text_ellipsis underline-box-job" data-original-title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS" tabindex="-1">
                                                {{ $item->nameBusiness }}
                                            </a></div>
                                        <div class="col-like"><button data-id="69610" class="btn-outline-hover save-job" tabindex="-1"><i class="fa-regular fa-heart icon-first"></i> <i class="fa-solid fa-heart icon-last"></i></button>
                                        </div>
                                    </div>
                                    <div class="col-job-info">
                                        <div class="salary text_ellipsis">{{ $item->wage }}
                                            {{ $item->currency }}
                                        </div>
                                        <div data-html="true" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="address text_ellipsis" data-original-title="<p style='text-align: left'>Hà Nội: Cầu Giấy, Nam Từ Liêm, Hà Đông</p>">
                                            {{ $item->area }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @endif

                        </div>
                    </div>
                </div>
                {!! $listAll->links() !!}
            </div>
        </div>
    </div>