@extends('layouts.main')

@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Bottle</h1>
        </div>
        <div class="card">
            <div class="card-body">
                <form action="">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="h4 mb-3 pl-2 pt-1" style="border-left: 3px solid rgb(78, 78, 240);">Bottle Identification</div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="typ-bottle">Type Bottle</label>
                                        <select name="bottle_type" id="type-bottle" class="form-control">
                                            <option value="">N2</option>
                                            <option value="">WM</option>
                                            <option value="">CO</option>
                                            <option value="">IN</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="typ-bottle">HV Brand</label>
                                        <select name="bottle_type" id="type-bottle" class="form-control">
                                            <option value="">Unitor</option>
                                            <option value="">HiFog</option>
                                            <option value="">Sanco</option>
                                            <option value="">Roth TavSAS</option>
                                            <option value="">KidderFenwal</option>
                                            <option value="">Ansul</option>
                                            <option value="">MTWormald</option>
                                            <option value="">TotalWalther</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="typ-bottle">Model</label>
                                        <select name="bottle_type" id="type-bottle" class="form-control">
                                            <option value="">Unitor</option>
                                            <option value="">HiFog</option>
                                            <option value="">Sanco</option>
                                            <option value="">Roth TavSAS</option>
                                            <option value="">KidderFenwal</option>
                                            <option value="">Ansul</option>
                                            <option value="">MTWormald</option>
                                            <option value="">TotalWalther</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="typ-bottle">B.Brand</label>
                                        <select name="bottle_type" id="type-bottle" class="form-control">
                                            <option value="">Unitor</option>
                                            <option value="">HiFog</option>
                                            <option value="">Sanco</option>
                                            <option value="">Roth TavSAS</option>
                                            <option value="">KidderFenwal</option>
                                            <option value="">Ansul</option>
                                            <option value="">MTWormald</option>
                                            <option value="">TotalWalther</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="serialno">Serial No</label>
                                        <input type="text" name="serial_no" id="serialno" class="form-control">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="manuf_date">Manuf Date</label>
                                        <input type="date" name="manuf_date" id="manuf_date" class="form-control">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="wp_bar">WP(Bar)</label>
                                        <input type="text" name="wp_bar" id="wp_bar" class="form-control">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="tp_bar">TP(Bar)</label>
                                        <input type="text" name="tp_bar" id="tp_bar" class="form-control">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="weight">Weight</label>
                                        <input type="text" name="weight" id="weight" class="form-control">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="vol_cap">Vol Cap(I)</label>
                                        <input type="text" name="vol_cap" id="vol_cap" class="form-control">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="fh_m_date">FH M Date</label>
                                        <input type="text" name="fh_m_date" id="fh_m_date" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="h4 mb-3 pl-2 pt-1" style="border-left: 3px solid rgb(78, 78, 240);">Bottle Location</div>
                                <hr>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="site">Site</label>
                                        <select name="site" id="site" class="form-control">
                                            <option value="">RIG</option>
                                            <option value="">CTR</option>
                                            <option value="">WHS</option>
                                            <option value="">BKP</option>
                                            <option value="">CPA</option>
                                            <option value="">SPS</option>
                                            <option value="">SPU</option>
                                            <option value="">CPU</option>
                                            <option value="">NPU</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="area">Area</label>
                                        <select name="area" id="area" class="form-control">
                                            <option value="">RIG</option>
                                            <option value="">CTR</option>
                                            <option value="">WHS</option>
                                            <option value="">BKP</option>
                                            <option value="">CPA</option>
                                            <option value="">SPS</option>
                                            <option value="">SPU</option>
                                            <option value="">CPU</option>
                                            <option value="">NPU</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection