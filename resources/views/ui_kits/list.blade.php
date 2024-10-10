@extends('layout.master')

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Lists</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"> <i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">Ui Kits</li>
                        <li class="breadcrumb-item active">Lists</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Default list</h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Morbi leo risus</li>
                            <li class="list-group-item">Porta ac consectetur ac</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Links and buttons</h4>
                    </div>
                    <div class="card-body">
                        <div class="list-group"><a class="list-group-item list-group-item-action active"
                                href="javascript:void(0)">Cras justo odio</a><a
                                class="list-group-item list-group-item-action" href="javascript:void(0)">Dapibus ac
                                facilisis in</a><a class="list-group-item list-group-item-action"
                                href="javascript:void(0)">Morbi leo risus</a><a
                                class="list-group-item list-group-item-action" href="javascript:void(0)">Porta ac
                                consectetur ac</a><a class="list-group-item list-group-item-action disabled"
                                href="javascript:void(0)">Vestibulum at eros</a></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Flush Style</h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Morbi leo risus</li>
                            <li class="list-group-item">Porta ac consectetur ac</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                            <li class="list-group-item">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Contextual classes</h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item list-group-item-primary">This is a primary list group item</li>
                            <li class="list-group-item list-group-item-secondary">This is a secondary list group item</li>
                            <li class="list-group-item list-group-item-success">This is a success list group item</li>
                            <li class="list-group-item list-group-item-danger">This is a danger list group item</li>
                            <li class="list-group-item list-group-item-warning">This is a warning list group item</li>
                            <li class="list-group-item list-group-item-info">This is a info list group item</li>
                            <li class="list-group-item list-group-item-light">This is a light list group item</li>
                            <li class="list-group-item list-group-item-dark">This is a dark list group item</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6 box-col-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>With badges</h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">Cras justo
                                odio<span class="badge badge-primary counter">14</span></li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">Dapibus ac
                                facilisis in<span class="badge badge-secondary counter">2</span></li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">Morbi leo
                                risus<span class="badge badge-success rounded-pill counter">1</span></li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">Dapibus ac
                                facilisis in<span class="badge badge-info rounded-pill">100%</span></li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">Dapibus ac
                                facilisis in<span class="badge badge-warning text-dark counter">2</span></li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">Morbi leo
                                risus<span class="badge badge-danger rounded-pill">sale</span></li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">Cras justo
                                odio<span class="badge badge-light text-dark counter">14</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6 box-col-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Custom content</h4>
                    </div>
                    <div class="card-body">
                        <div class="list-group"><a
                                class="list-group-item list-group-item-action flex-column align-items-start active"
                                href="javascript:void(0)">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">List group item heading</h5><small>3 days ago</small>
                                </div>
                                <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget
                                    risus varius blandit.</p><small>Donec id elit non mi porta.</small>
                            </a><a class="list-group-item list-group-item-action flex-column align-items-start"
                                href="javascript:void(0)">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">List group item heading</h5><small class="text-muted">3 days
                                        ago</small>
                                </div>
                                <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget
                                    risus varius blandit.</p><small class="text-muted">Donec id elit non mi porta.</small>
                            </a><a class="list-group-item list-group-item-action flex-column align-items-start"
                                href="javascript:void(0)">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">List group item heading</h5><small class="text-muted">3 days
                                        ago</small>
                                </div>
                                <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget
                                    risus varius blandit.</p><small class="text-muted">Donec id elit non mi porta.</small>
                            </a></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>JavaScript behavior</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="list-group" id="list-tab" role="tablist"><a
                                        class="list-group-item list-group-item-action active" id="list-home-list"
                                        data-bs-toggle="list" href="#list-home" role="tab"
                                        aria-controls="list-home">Home</a><a
                                        class="list-group-item list-group-item-action" id="list-profile-list"
                                        data-bs-toggle="list" href="#list-profile" role="tab"
                                        aria-controls="list-profile">Profile</a><a
                                        class="list-group-item list-group-item-action" id="list-messages-list"
                                        data-bs-toggle="list" href="#list-messages" role="tab"
                                        aria-controls="list-messages">Messages</a><a
                                        class="list-group-item list-group-item-action" id="list-settings-list"
                                        data-bs-toggle="list" href="#list-settings" role="tab"
                                        aria-controls="list-settings">Settings</a></div>
                            </div>
                            <div class="col-sm-8">
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="list-home" role="tabpanel"
                                        aria-labelledby="list-home-list">Lorem Ipsum is simply dummy text of the printing
                                        and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                        ever since the 1500s, when an unknown printer took a galley of type and scrambled it
                                        to make a type specimen book. It has survived not only five centuries, but also the
                                        leap into electronic typesetting, remaining essentially unchanged. It was
                                        popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                                        passages, and more recently with desktop publishing software like Aldus PageMaker
                                        including versions of Lorem Ipsum.</div>
                                    <div class="tab-pane fade" id="list-profile" role="tabpanel"
                                        aria-labelledby="list-profile-list">Lorem Ipsum is simply dummy text of the
                                        printing and typesetting industry. Lorem Ipsum has been the industry's standard
                                        dummy text ever since the 1500s, when an unknown printer took a galley of type and
                                        scrambled it to make a type specimen book. It has survived not only five centuries,
                                        but also the leap into electronic typesetting, remaining essentially unchanged. It
                                        was popularised in the 1960s with the release of Letraset sheets containing Lorem
                                        Ipsum passages, and more recently with desktop publishing software like Aldus
                                        PageMaker including versions of Lorem Ipsum.</div>
                                    <div class="tab-pane fade" id="list-messages" role="tabpanel"
                                        aria-labelledby="list-messages-list">Lorem Ipsum is simply dummy text of the
                                        printing and typesetting industry. Lorem Ipsum has been the industry's standard
                                        dummy text ever since the 1500s, when an unknown printer took a galley of type and
                                        scrambled it to make a type specimen book. It has survived not only five centuries,
                                        but also the leap into electronic typesetting, remaining essentially unchanged. It
                                        was popularised in the 1960s with the release of Letraset sheets containing Lorem
                                        Ipsum passages, and more recently with desktop publishing software like Aldus
                                        PageMaker including versions of Lorem Ipsum.</div>
                                    <div class="tab-pane fade" id="list-settings" role="tabpanel"
                                        aria-labelledby="list-settings-list">Lorem Ipsum is simply dummy text of the
                                        printing and typesetting industry. Lorem Ipsum has been the industry's standard
                                        dummy text ever since the 1500s, when an unknown printer took a galley of type and
                                        scrambled it to make a type specimen book. It has survived not only five centuries,
                                        but also the leap into electronic typesetting, remaining essentially unchanged. It
                                        was popularised in the 1960s with the release of Letraset sheets containing Lorem
                                        Ipsum passages, and more recently with desktop publishing software like Aldus
                                        PageMaker including versions of Lorem Ipsum.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>With Icon</h4>
                    </div>
                    <div class="card-body">
                        <div class="list-group"><a class="list-group-item list-group-item-action"
                                href="javascript:void(0)"><i class="icon-save-alt"></i>Cras justo odio</a><a
                                class="list-group-item list-group-item-action" href="javascript:void(0)"><i
                                    class="icon-target"></i>Dapibus ac facilisis in</a><a
                                class="list-group-item list-group-item-action" href="javascript:void(0)"><i
                                    class="icon-mobile"></i>Morbi leo risus</a><a
                                class="list-group-item list-group-item-action disabled" href="javascript:void(0)"><i
                                    class="icon-shopping-cart-full"></i>Vestibulum at eros</a></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>With Images</h4>
                    </div>
                    <div class="card-body">
                        <div class="list-group"><a class="list-group-item list-group-item-action d-flex"
                                href="javascript:void(0)"><img src="{{ asset('assets/images/user/1.jpg') }}" alt="">
                                <div class="flex-grow-1 align-self-center">Cras justo odio</div>
                            </a><a class="list-group-item list-group-item-action d-flex" href="javascript:void(0)"><img
                                    src="{{ asset('assets/images/user/1.jpg') }}" alt="">
                                <div class="flex-grow-1 align-self-center">Dapibus ac facilisis in</div>
                            </a><a class="list-group-item list-group-item-action d-flex" href="javascript:void(0)"><img
                                    src="{{ asset('assets/images/user/1.jpg') }}" alt="">
                                <div class="flex-grow-1 align-self-center">Morbi leo risus</div>
                            </a><a class="list-group-item list-group-item-action d-flex disabled"
                                href="javascript:void(0)"><img src="{{ asset('assets/images/user/1.jpg') }}" alt="">
                                <div class="flex-grow-1 align-self-center">Vestibulum at eros</div>
                            </a></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>With Image Rounded</h4>
                    </div>
                    <div class="card-body">
                        <div class="list-group"><a class="list-group-item list-group-item-action d-flex"
                                href="javascript:void(0)"><img class="rounded-circle" src="{{ asset('assets/images/user/1.jpg') }}"
                                    alt="">
                                <div class="flex-grow-1 align-self-center">Cras justo odio</div>
                            </a><a class="list-group-item list-group-item-action d-flex" href="javascript:void(0)"><img
                                    class="rounded-circle" src="{{ asset('assets/images/user/1.jpg') }}" alt="">
                                <div class="flex-grow-1 align-self-center">Dapibus ac facilisis in</div>
                            </a><a class="list-group-item list-group-item-action d-flex" href="javascript:void(0)"><img
                                    class="rounded-circle" src="{{ asset('assets/images/user/1.jpg') }}" alt="">
                                <div class="flex-grow-1 align-self-center">Morbi leo risus</div>
                            </a><a class="list-group-item list-group-item-action d-flex disabled"
                                href="javascript:void(0)"><img class="rounded-circle" src="{{ asset('assets/images/user/1.jpg') }}"
                                    alt="">
                                <div class="flex-grow-1 align-self-center">Vestibulum at eros</div>
                            </a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
