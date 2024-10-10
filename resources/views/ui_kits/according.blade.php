@extends('layout.master')

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Accordion</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"> <i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">Ui Kits</li>
                        <li class="breadcrumb-item active">Accordion</li>
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
                        <h4>Basic Accordion</h4><span>Using the <a href="#">card</a> component, you can extend the
                            default collapse behavior to create an accordion.</span>
                    </div>
                    <div class="card-body">
                        <div class="default-according" id="accordion">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link ps-0" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">Collapsible Group Item #<span>1</span></button>
                                    </h5>
                                </div>
                                <div class="collapse show" id="collapseOne" aria-labelledby="headingOne"
                                    data-bs-parent="#accordion">
                                    <div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod high life
                                        accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat
                                        skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf
                                        moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                        shoreditch et.</div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link ps-0 collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">Collapsible Group Item #<span>2</span></button>
                                    </h5>
                                </div>
                                <div class="collapse" id="collapseTwo" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordion">
                                    <div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod high life
                                        accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat
                                        skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf
                                        moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                        shoreditch et.</div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link ps-0 collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">Collapsible Group Item #<span>3</span></button>
                                    </h5>
                                </div>
                                <div class="collapse" id="collapseThree" aria-labelledby="headingThree"
                                    data-bs-parent="#accordion">
                                    <div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod high life
                                        accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat
                                        skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf
                                        moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                        shoreditch et.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>All Close Accordion</h4><span>Using the <a href="#">card</a> component, you can extend the
                            default collapse behavior to create an accordion.</span>
                    </div>
                    <div class="card-body">
                        <div class="default-according" id="accordionclose">
                            <div class="card">
                                <div class="card-header" id="heading1">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link ps-0" data-bs-toggle="collapse"
                                            data-bs-target="#collapse1" aria-expanded="true"
                                            aria-controls="heading1">Collapsible Group Item #<span>1</span></button>
                                    </h5>
                                </div>
                                <div class="collapse" id="collapse1" aria-labelledby="heading1"
                                    data-bs-parent="#accordionclose">
                                    <div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod high life
                                        accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat
                                        skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf
                                        moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                        shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                                        nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                                        occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably
                                        haven't heard of them accusamus labore sustainable VHS.</div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading2">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link ps-0 collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#collapse2" aria-expanded="false"
                                            aria-controls="heading2">Collapsible Group Item #<span>2</span></button>
                                    </h5>
                                </div>
                                <div class="collapse" id="collapse2" aria-labelledby="heading2"
                                    data-bs-parent="#accordionclose">
                                    <div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod high life
                                        accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat
                                        skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf
                                        moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                        shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                                        nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                                        occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably
                                        haven't heard of them accusamus labore sustainable VHS.</div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading3">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link ps-0 collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#collapse3" aria-expanded="false"
                                            aria-controls="collapse3">Collapsible Group Item #<span>3</span></button>
                                    </h5>
                                </div>
                                <div class="collapse" id="collapse3" aria-labelledby="heading3"
                                    data-bs-parent="#accordionclose">
                                    <div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod high life
                                        accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat
                                        skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf
                                        moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                        shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                                        nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                                        occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably
                                        haven't heard of them accusamus labore sustainable VHS.</div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading4">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link ps-0 collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#collapse4" aria-expanded="false"
                                            aria-controls="collapse4">Collapsible Group Item #<span>4</span></button>
                                    </h5>
                                </div>
                                <div class="collapse" id="collapse4" aria-labelledby="heading4"
                                    data-bs-parent="#accordionclose">
                                    <div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod high life
                                        accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat
                                        skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf
                                        moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                        shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                                        nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                                        occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably
                                        haven't heard of them accusamus labore sustainable VHS.</div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading5">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link ps-0 collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#collapse5" aria-expanded="false"
                                            aria-controls="collapse5">Collapsible Group Item #<span>5</span></button>
                                    </h5>
                                </div>
                                <div class="collapse" id="collapse5" aria-labelledby="heading5"
                                    data-bs-parent="#accordionclose">
                                    <div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod high life
                                        accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat
                                        skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf
                                        moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                        shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                                        nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                                        occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably
                                        haven't heard of them accusamus labore sustainable VHS.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Color Accordion</h4><span>Add <code>.bg-*</code> class to add background color with
                            card-header.</span>
                    </div>
                    <div class="card-body">
                        <div class="default-according" id="accordion1">
                            <div class="card">
                                <div class="card-header bg-primary" id="headingFour">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link ps-0 text-white" data-bs-toggle="collapse"
                                            data-bs-target="#collapseFour" aria-expanded="true"
                                            aria-controls="collapseFour">Collapsible Group Item #<span>1</span></button>
                                    </h5>
                                </div>
                                <div class="collapse show" id="collapseFour" aria-labelledby="headingOne"
                                    data-bs-parent="#accordion1">
                                    <div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod high life
                                        accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat
                                        skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf
                                        moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                        shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                                        nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                                        occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably
                                        haven't heard of them accusamus labore sustainable VHS.</div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header bg-primary" id="headingFive">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link ps-0 collapsed text-white" data-bs-toggle="collapse"
                                            data-bs-target="#collapseFive" aria-expanded="false"
                                            aria-controls="collapseFive">Collapsible Group Item #<span>2</span></button>
                                    </h5>
                                </div>
                                <div class="collapse" id="collapseFive" aria-labelledby="headingFive"
                                    data-bs-parent="#accordion1">
                                    <div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod high life
                                        accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat
                                        skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf
                                        moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                        shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                                        nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                                        occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably
                                        haven't heard of them accusamus labore sustainable VHS.</div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header bg-primary" id="headingSix">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link ps-0 collapsed text-white" data-bs-toggle="collapse"
                                            data-bs-target="#collapseSix" aria-expanded="false"
                                            aria-controls="collapseSix">Collapsible Group Item #<span>3</span></button>
                                    </h5>
                                </div>
                                <div class="collapse" id="collapseSix" aria-labelledby="headingSix"
                                    data-bs-parent="#accordion1">
                                    <div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod high life
                                        accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat
                                        skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf
                                        moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                        shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                                        nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                                        occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably
                                        haven't heard of them accusamus labore sustainable VHS.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Color Accordion</h4><span>Add <code>.bg-*</code> class to add background color with
                            card-header.</span>
                    </div>
                    <div class="card-body">
                        <div class="default-according" id="accordion2">
                            <div class="card">
                                <div class="card-header bg-secondary" id="headingseven">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link ps-0 text-white" data-bs-toggle="collapse"
                                            data-bs-target="#collapseseven" aria-expanded="true">Collapsible Group Item
                                            #<span>1</span></button>
                                    </h5>
                                </div>
                                <div class="collapse show" id="collapseseven" aria-labelledby="headingOne"
                                    data-bs-parent="#accordion2">
                                    <div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod high life
                                        accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat
                                        skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf
                                        moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                        shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                                        nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                                        occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably
                                        haven't heard of them accusamus labore sustainable VHS.</div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header bg-secondary" id="headingeight">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link ps-0 collapsed text-white" data-bs-toggle="collapse"
                                            data-bs-target="#collapseeight" aria-expanded="false"
                                            aria-controls="collapseeight">Collapsible Group Item #<span>2</span></button>
                                    </h5>
                                </div>
                                <div class="collapse" id="collapseeight" aria-labelledby="headingeight"
                                    data-bs-parent="#accordion2">
                                    <div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod high life
                                        accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat
                                        skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf
                                        moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                        shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                                        nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                                        occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably
                                        haven't heard of them accusamus labore sustainable VHS.</div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header bg-secondary" id="headingnine">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link ps-0 collapsed text-white" data-bs-toggle="collapse"
                                            data-bs-target="#collapsenine" aria-expanded="false"
                                            aria-controls="collapsenine">Collapsible Group Item #<span>3</span></button>
                                    </h5>
                                </div>
                                <div class="collapse" id="collapsenine" aria-labelledby="headingnine"
                                    data-bs-parent="#accordion2">
                                    <div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod high life
                                        accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat
                                        skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf
                                        moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                        shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                                        nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                                        occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably
                                        haven't heard of them accusamus labore sustainable VHS.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Accordion With Icon on Title</h4><span>Add <code>&lt;i&gt;&lt;/i&gt;</code> tag Along with icon
                            class before title text.</span>
                    </div>
                    <div class="card-body">
                        <div class="default-according" id="accordionicon">
                            <div class="card">
                                <div class="card-header bg-primary" id="heading11">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link ps-0 text-white" data-bs-toggle="collapse"
                                            data-bs-target="#collapse11" aria-expanded="true"
                                            aria-controls="collapse11"><i
                                                class="icofont icofont-briefcase-alt-2"></i>Collapsible Group Item
                                            #<span>1</span></button>
                                    </h5>
                                </div>
                                <div class="collapse show" id="collapse11" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionicon">
                                    <div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod high life
                                        accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat
                                        skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf
                                        moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                        shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                                        nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                                        occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably
                                        haven't heard of them accusamus labore sustainable VHS.</div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header bg-primary" id="heading22">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link ps-0 collapsed text-white" data-bs-toggle="collapse"
                                            data-bs-target="#collapse22" aria-expanded="false"
                                            aria-controls="collapse22"><i class="icofont icofont-support"></i>Collapsible
                                            Group Item #<span>2</span></button>
                                    </h5>
                                </div>
                                <div class="collapse" id="collapse22" aria-labelledby="headingeight"
                                    data-bs-parent="#accordionicon">
                                    <div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod high life
                                        accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat
                                        skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf
                                        moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                        shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                                        nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                                        occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably
                                        haven't heard of them accusamus labore sustainable VHS.</div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header bg-primary" id="heading33">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link ps-0 collapsed text-white" data-bs-toggle="collapse"
                                            data-bs-target="#collapse44" aria-expanded="false"
                                            aria-controls="collapse44"><i
                                                class="icofont icofont-tasks-alt"></i>Collapsible Group Item
                                            #<span>3</span></button>
                                    </h5>
                                </div>
                                <div class="collapse" id="collapse44" data-bs-parent="#accordionicon">
                                    <div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod high life
                                        accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat
                                        skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf
                                        moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                        shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                                        nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                                        occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably
                                        haven't heard of them accusamus labore sustainable VHS.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Accordion open close icon</h4><span>Add <code>&lt;i&gt;&lt;/i&gt;</code> tag Along with icon
                            class before title text.</span>
                    </div>
                    <div class="card-body">
                        <div class="default-according style-1" id="accordionoc">
                            <div class="card">
                                <div class="card-header bg-primary">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link ps-0 text-white" data-bs-toggle="collapse"
                                            data-bs-target="#collapseicon" aria-expanded="true"
                                            aria-controls="collapse11"><i class="icofont icofont-briefcase-alt-2"></i>
                                            Collapsible Group Item #<span>1</span></button>
                                    </h5>
                                </div>
                                <div class="collapse show" id="collapseicon" aria-labelledby="collapseicon"
                                    data-bs-parent="#accordionoc">
                                    <div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod high life
                                        accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat
                                        skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf
                                        moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                        shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                                        nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                                        occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably
                                        haven't heard of them accusamus labore sustainable VHS.</div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header bg-primary">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link ps-0 collapsed text-white" data-bs-toggle="collapse"
                                            data-bs-target="#collapseicon1" aria-expanded="false"><i
                                                class="icofont icofont-support"></i> Collapsible Group Item
                                            #<span>2</span></button>
                                    </h5>
                                </div>
                                <div class="collapse" id="collapseicon1" aria-labelledby="headingeight"
                                    data-bs-parent="#accordionoc">
                                    <div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod high life
                                        accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat
                                        skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf
                                        moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                        shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                                        nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                                        occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably
                                        haven't heard of them accusamus labore sustainable VHS.</div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header bg-primary">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link ps-0 collapsed text-white" data-bs-toggle="collapse"
                                            data-bs-target="#collapseicon2" aria-expanded="false"
                                            aria-controls="collapseicon2"><i class="icofont icofont-tasks-alt"></i>
                                            Collapsible Group Item #<span>3</span></button>
                                    </h5>
                                </div>
                                <div class="collapse" id="collapseicon2" data-bs-parent="#accordionoc">
                                    <div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod high life
                                        accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat
                                        skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf
                                        moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                        shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                                        nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                                        occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably
                                        haven't heard of them accusamus labore sustainable VHS.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection