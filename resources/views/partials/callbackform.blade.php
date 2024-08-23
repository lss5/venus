<form method="POST" action="{{ route('lead.store') }}" id="contact-form" class="w-100">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="mb-3 row">
        <label for="name" class="col-sm-2 col-form-label fs-5">Имя</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name">
            <div class="form-text text-danger fs-sm"></div>
        </div>
    </div>
    <div class="mb-3 row">
        <label for="phone" class="col-sm-2 col-form-label fs-5">Телефон</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="phone" name="phone">
            <div class="form-text text-danger fs-sm"></div>
        </div>
    </div>

    <button type="submit" class="w-100 btn btn-lg btn-primary mb-3">
        Заказать
    </button>

    <div class="form-check mb-3">
        <input class="form-check-input" type="checkbox" value="true" id="politics" name="politics" checked>
        <label class="form-check-label fs-sm" for="politics">
            Соглашаюсь с <a href="{{ route('pages.politics') }}" class="link-primary link-underline link-underline-opacity-0 link-underline-opacity-75-hover">политикой конфиденциальности</a>
        </label>
        <div class="form-text text-danger fs-sm"></div>
    </div>
</form>