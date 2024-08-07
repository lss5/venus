@extends('layouts.app')

@section('content')
<div class="container mb-5">
    <div class="row">
        <div class="col-12 mt-5">
            <h1 class="fs-3 fw-medium">Бесплатная и быстрая доставка</h1>
        </div>
    </div>
    <div class="row my-3">
        <div class="col-12 text-justify">
            <p class="fs-5 fw-light">
                <span class="fw-medium">Доставка осуществляется бесплатно</span>
                до ближайшего к вам офиса <span class="fw-medium">СДЭК</span> или отделения <span class="fw-medium">Почты России</span>.
                Каждому заказу присваивается трек-номер, который будет отправлен Вам на e-mail или телефон. Отправка осуществляется в день оплаты.
                Самовывоз возможен у партнеров, при условии предварительного согласования с менеджером по
                телефону - <a class="fw-medium link-primary link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="{{ route('pages.partners') }}">список адресов магазинов</a>.
                Детали доставки комплектующих и возможность отправки в другие страны уточняйте у менеджера.
            </p>
        </div>
        <div class="col-12 text-justify">
            <h2 class="fs-4 fw-medium">Оплата</h2>
            <p class="fs-5 fw-light">
                Оплата по счету для юридических лиц или у партнеров компании согласно условиям оплаты.
                Для уточнения свяжитесь с нами через форму "Обратной связи" или напишите на почту:
                <a class="fw-medium link-primary link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="mailto:manager@clean-spc.ru">manager@clean-spc.ru</a>.
            </p>
        </div>
    </div>
</div>

@endsection