@extends('layouts.app2')

@section('content')
<div class="conatiner">
    <div class="row">
    <div class="modal d-block" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Ты просто молодец!</h5>
                </div>
                <div class="modal-body">
                    <p>Нам очень понравилось с тобой играть!</p>
                    <p>Тебе понравилось с нами?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" id="success" class="result btn btn-success">ДА</button>
                    <button type="button" id="unsuccess" class="result btn btn-danger">НЕТ</button>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection