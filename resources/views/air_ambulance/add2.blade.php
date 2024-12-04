@extends('layout.layout')

@section('title', 'Air Ambulance Details')

@section('additional_css')
<style>
.fieldset {
    border: 1px solid var(--primary-color);
    border-radius: 8px;
    padding: 20px;
    margin-bottom: 20px;
    background-color: white;
}

.legend {
    color: var(--primary-color);
    font-weight: bold;
    width: auto;
    padding: 0 10px;
    margin-bottom: 0;
    font-size: 1.1rem;
}

.form-group {
    margin-bottom: 1rem;
}

.form-label {
    font-weight: 500;
    margin-bottom: 0.5rem;
}

.time-input {
    width: 120px;
}
</style>
@endsection

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Air Ambulance Details</h2>
        <a href="{{ route('air_ambulance') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> Back to List
        </a>
    </div>

    {!! Form::model(new App\Models\User, ['route' => ['storeAirAmb']]) !!}
    @csrf

    <!-- Respiratory -->
    <fieldset class="fieldset">
        <legend class="legend">Respiratory</legend>
        <div class="row">
            <div class="col-md-4 mb-3">
                <label class="form-label">Respiratory</label>
                <input type="text" class="form-control" name="respiratory">
            </div>
            <div class="col-md-4 mb-3">
                <label class="form-label">Rate</label>
                <input type="text" class="form-control" name="r_rate">
            </div>
            <div class="col-md-4 mb-3">
                <label class="form-label">Airway Methods</label>
                <input type="text" class="form-control" name="airway">
            </div>
            <div class="col-md-4 mb-3">
                <label class="form-label">PEEP</label>
                <input type="text" class="form-control" name="peep">
            </div>
            <div class="col-md-4 mb-3">
                <label class="form-label">Intercostal Drain</label>
                <input type="text" class="form-control" name="intercoastal">
            </div>
        </div>
    </fieldset>

    <!-- Drug Infusion -->
    <fieldset class="fieldset">
        <legend class="legend">Drug Infusion</legend>
        <div class="row">
            <div class="col-md-3 mb-3">
                <label class="form-label">Name of Drug</label>
                <input type="text" class="form-control" name="d_name">
            </div>
            <div class="col-md-2 mb-3">
                <label class="form-label">Dose</label>
                <input type="text" class="form-control" name="d_dose">
            </div>
            <div class="col-md-3 mb-3">
                <label class="form-label">Fluid Amount & Type</label>
                <input type="text" class="form-control" name="d_fluid_amount">
            </div>
            <div class="col-md-1 mb-3">
                <label class="form-label">Rate</label>
                <input type="text" class="form-control" name="d_rate">
            </div>
            <div class="col-md-1 mb-3">
                <label class="form-label">Start</label>
                <input type="time" class="form-control time-input" name="d_start">
            </div>
            <div class="col-md-1 mb-3">
                <label class="form-label">Stop</label>
                <input type="time" class="form-control time-input" name="d_stop">
            </div>
            <div class="col-md-1 mb-3">
                <label class="form-label">Left</label>
                <input type="text" class="form-control" name="d_left">
            </div>
        </div>
    </fieldset>

    <!-- Cardiovascular -->
    <fieldset class="fieldset">
        <legend class="legend">Cardiovascular</legend>
        <div class="row">
            <div class="col-md-3 mb-3">
                <label class="form-label">Pulse Rate</label>
                <input type="text" class="form-control" name="c_rate">
            </div>
            <div class="col-md-3 mb-3">
                <label class="form-label">Pulse Rhythm</label>
                <input type="text" class="form-control" name="rhythm">
            </div>
            <div class="col-md-3 mb-3">
                <label class="form-label">Blood Pressure</label>
                <input type="text" class="form-control" name="c_blood">
            </div>
            <div class="col-md-3 mb-3">
                <label class="form-label">IV Line Central</label>
                <input type="text" class="form-control" name="c_iv_line_c">
            </div>
            <div class="col-md-4 mb-3">
                <label class="form-label">Pacemaker</label>
                <input type="text" class="form-control" name="pacemaker">
            </div>
            <div class="col-md-4 mb-3">
                <label class="form-label">IV Line Peripheral</label>
                <input type="text" class="form-control" name="c_iv_line_p">
            </div>
            <div class="col-md-4 mb-3">
                <label class="form-label">Arterial Line</label>
                <input type="text" class="form-control" name="c_arterial">
            </div>
        </div>
    </fieldset>

    <!-- Neurological -->
    <fieldset class="fieldset">
        <legend class="legend">Neurological</legend>
        <div class="row">
            <div class="col-md-3 mb-3">
                <label class="form-label">Glasgow Coma Scale</label>
                <input type="text" class="form-control" name="n_glasgow">
            </div>
            <div class="col-md-3 mb-3">
                <label class="form-label">Eyes</label>
                <input type="text" class="form-control" name="n_eyes">
            </div>
            <div class="col-md-3 mb-3">
                <label class="form-label">Motor</label>
                <input type="text" class="form-control" name="n_motor">
            </div>
            <div class="col-md-3 mb-3">
                <label class="form-label">Verbal</label>
                <input type="text" class="form-control" name="n_verbal">
            </div>
            <div class="col-md-4 mb-3">
                <label class="form-label">Pupils</label>
                <input type="text" class="form-control" name="n_pupils">
            </div>
            <div class="col-md-4 mb-3">
                <label class="form-label">Left</label>
                <input type="text" class="form-control" name="n_left">
            </div>
            <div class="col-md-4 mb-3">
                <label class="form-label">Right</label>
                <input type="text" class="form-control" name="n_right">
            </div>
        </div>
    </fieldset>

    <!-- Blood -->
    <fieldset class="fieldset">
        <legend class="legend">Blood</legend>
        <div class="row">
            <div class="col-md-2 mb-3">
                <label class="form-label">pH</label>
                <input type="text" class="form-control" name="b_ph">
            </div>
            <div class="col-md-2 mb-3">
                <label class="form-label">pO2</label>
                <input type="text" class="form-control" name="b_p02">
            </div>
            <div class="col-md-2 mb-3">
                <label class="form-label">pCO2</label>
                <input type="text" class="form-control" name="b_pC02">
            </div>
            <div class="col-md-2 mb-3">
                <label class="form-label">HCO3</label>
                <input type="text" class="form-control" name="b_hc03">
            </div>
            <div class="col-md-2 mb-3">
                <label class="form-label">SaO2</label>
                <input type="text" class="form-control" name="b_sa03">
            </div>
            <div class="col-md-2 mb-3">
                <label class="form-label">Hb</label>
                <input type="text" class="form-control" name="b_hb">
            </div>
            <div class="col-md-2 mb-3">
                <label class="form-label">WBC</label>
                <input type="text" class="form-control" name="b_wwc">
            </div>
            <div class="col-md-2 mb-3">
                <label class="form-label">Na+</label>
                <input type="text" class="form-control" name="b_na">
            </div>
            <div class="col-md-2 mb-3">
                <label class="form-label">K+</label>
                <input type="text" class="form-control" name="b_k">
            </div>
            <div class="col-md-2 mb-3">
                <label class="form-label">Urea</label>
                <input type="text" class="form-control" name="b_urea">
            </div>
            <div class="col-md-2 mb-3">
                <label class="form-label">Cardiac Enzymes</label>
                <input type="text" class="form-control" name="b_cardiac">
            </div>
            <div class="col-md-2 mb-3">
                <label class="form-label">Troponin T</label>
                <input type="text" class="form-control" name="b_torpinen">
            </div>
        </div>
    </fieldset>

    <!-- Equipment -->
    <fieldset class="fieldset">
        <legend class="legend">Equipment</legend>
        <div class="row">
            <div class="col-md-3 mb-3">
                <label class="form-label">Ventilator</label>
                <input type="text" class="form-control" name="e_ventilator">
            </div>
            <div class="col-md-3 mb-3">
                <label class="form-label">ECG Monitor</label>
                <input type="text" class="form-control" name="e_monitor">
            </div>
            <div class="col-md-3 mb-3">
                <label class="form-label">Capnograph</label>
                <input type="text" class="form-control" name="e_capnograph">
            </div>
            <div class="col-md-3 mb-3">
                <label class="form-label">Cervical Traction</label>
                <input type="text" class="form-control" name="e_cervical">
            </div>
            <div class="col-md-4 mb-3">
                <label class="form-label">Incubator</label>
                <input type="text" class="form-control" name="e_incubator">
            </div>
            <div class="col-md-4 mb-3">
                <label class="form-label">Hot Box</label>
                <input type="text" class="form-control" name="e_hot_box">
            </div>
            <div class="col-md-4 mb-3">
                <label class="form-label">Other</label>
                <input type="text" class="form-control" name="e_other">
            </div>
        </div>
    </fieldset>

    <!-- Mobilisation -->
    <fieldset class="fieldset">
        <legend class="legend">Mobilisation</legend>
        <div class="row">
            <div class="col-md-3 mb-3">
                <label class="form-label">Time Mobile</label>
                <input type="time" class="form-control time-input" name="m_time">
            </div>
            <div class="col-md-3 mb-3">
                <label class="form-label">E.T.D</label>
                <input type="time" class="form-control time-input" name="m_etd">
            </div>
            <div class="col-md-3 mb-3">
                <label class="form-label">Arrive Refuel</label>
                <input type="time" class="form-control time-input" name="m_a_refuel">
            </div>
            <div class="col-md-3 mb-3">
                <label class="form-label">Place</label>
                <input type="text" class="form-control" name="m_place">
            </div>
            <div class="col-md-3 mb-3">
                <label class="form-label">Depart Refuel</label>
                <input type="time" class="form-control time-input" name="m_d_refuel">
            </div>
            <div class="col-md-3 mb-3">
                <label class="form-label">E.T.A To Scene</label>
                <input type="time" class="form-control time-input" name="m_eta_s">
            </div>
            <div class="col-md-3 mb-3">
                <label class="form-label">Arrive Scene</label>
                <input type="time" class="form-control time-input" name="m_a_scene">
            </div>
            <div class="col-md-3 mb-3">
                <label class="form-label">Person Informed</label>
                <input type="text" class="form-control" name="scenePerson_informed">
            </div>
        </div>
    </fieldset>

    <!-- Call Status -->
    <fieldset class="fieldset">
        <legend class="legend">Call Status</legend>
        <div class="row">
            <div class="col-12 mb-3">
                <label class="form-label">Additional Information</label>
                <textarea class="form-control" name="additional_info" rows="4"></textarea>
            </div>
        </div>
    </fieldset>

    <!-- Action Buttons -->
    <div class="d-flex justify-content-end gap-2 mb-4">
        <a href="{{ route('air_ambulance') }}" class="btn btn-secondary">
            <i class="fas fa-times"></i> Cancel
        </a>
        {!! Form::submit('Capture', ['class' => 'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}
</div>
@endsection
