@php($privacyUrl = \Illuminate\Support\Facades\Route::has("web.privacy-policy") ?  route('web.privacy-policy') : "#")
@php($agreementUrl = \Illuminate\Support\Facades\Route::has("web.user-agreement") ? route("web.user-agreement") : "#")
@php($org = config("privacy-policy") ? config("privacy-policy.company") : config("tailwind-theme.checkTextOrganization"))
<span class="text-sm leading-4.5 inline-block">
    Я даю {{ $org }} свое <a href="{{ $privacyUrl }}" target="_blank" class="underline hover:text-body/60">Согласие на обработку персональных данных</a> и принимаю условия <a href="{{ $agreementUrl }}" target="_blank" class="underline hover:text-body/60">Политики по обработке персональных данных</a>
</span>
