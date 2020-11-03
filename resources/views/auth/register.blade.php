<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <img src="img/logo.png" id="logo"/>
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="/register"">
            @csrf

            <div class="mt-4 form-group">
                <x-jet-label for="lname" value="Овог" />
                <x-jet-input id="lname" class="block mt-1 w-full" type="text" name="lname" :value="old('lname')" required autofocus autocomplete="lname" />
            </div>

            <div class="mt-4">
                <x-jet-label for="fname" value="Нэр" />
                <x-jet-input id="fname" class="block mt-1 w-full" type="text" name="fname" :value="old('fname')" required autofocus autocomplete="fname" />
            </div>

            <div class="mt-4">
                <x-jet-label for="register_number" value="Регистерийн дугаар" />
                <x-jet-input id="register_number" class="block mt-1 w-full" type="text" name="register_number" :value="old('register_number')" required autofocus autocomplete="register_number" placeholder="AA********"/>
            </div>

            <div class="mt-4">
                <x-jet-label for="gender" value="Хүйс" />
                <select id="gender" class="form-input rounded-md shadow-sm block mt-1 w-full" type="text" name="gender" :value="old('gender')" required autofocus autocomplete="gender">
                    <option>Эрэгтэй</option>
                    <option>Эмэгтэй</option>
                </select>
            </div>

            <div class="mt-4">
                <x-jet-label for="birthdate" value="Төрсөн он сар өдөр" />
                <x-jet-input id="birthdate" class="block mt-1 w-full" type="date" name="birthdate" :value="old('birthdate')" required autofocus autocomplete="birthdate" />
            </div>

            <div class="mt-4">
                <x-jet-label for="undsen_zahirgaa" value="Үндсэн захиргаа" />
                <select id="undsen_zahirgaa" class="form-input shadow-sm block mt-1 w-full " type="text" name="undsen_zahirgaa" :value="old('undsen_zahirgaa')" required autofocus autocomplete="undsen_zahirgaa" >
                    <option>Улаанбаатар</option>
                    <option>Архангай</option>
                    <option>Баян-Өлгий</option>
                    <option>Баянхонгор</option>
                    <option>Булган</option>
                    <option>Говь-Алтай</option>
                    <option>Говьсүмбэр</option>
                    <option>Дархан-Уул</option>
                    <option>Дорноговь</option>
                    <option>Дорнод</option>
                    <option>Дундговь</option>
                    <option>Завхан</option>
                    <option>Орхон</option>
                    <option>Өвөрхангай</option>
                    <option>Өмнөговь</option>
                    <option>Сүхбаатар</option>
                    <option>Сэлэнгэ</option>
                    <option>Төв</option>
                    <option>Увс</option>
                    <option>Ховд</option>
                    <option>Хөвсгөл</option>
                    <option>Хэнтий</option>
                </select>
            </div>

            <div class="mt-4">
                <x-jet-label for="skill" value="Цол, зэрэг" />
                <select id="skill" class="form-input rounded-md shadow-sm block mt-1 w-full" type="text" name="skill" :value="old('skill')" required autofocus autocomplete="skill">
                    <option>Монгол улсын даяар дурсах даян мэргэн</option>
                    <option>Монгол улсын даяар дурсах мэргэн</option>
                    <option>Монгол улсын даян мэргэн</option>
                    <option>Монгол улсын мэргэн</option>
                    <option>Монгол улсын гоц харваач</option>
                    <option>Монгол улсын гарамгай харваач</option>
                    <option>Аймгийн мэргэн, спортын мастер</option>
                    <option>Аймгийн мэргэн, спортын дэд мастер</option>
                    <option>Спортын мастер</option>
                    <option>Спортын дэд мастер</option>
                    <option>Аймгийн мэргэн</option>
                    <option>1-р зэрэг</option>
                    <option>2-р зэрэг</option>
                    <option>3-р зэрэг</option>
                    <option>Залуу харваач</option>
                </select>
            </div>

            <div class="mt-4">
                <x-jet-label for="odoogiin_hayg" value="Одоо оршин суугаа хаяг" />
                <x-jet-input id="odoogiin_hayg" class="block mt-1 w-full" type="text" name="odoogiin_hayg" :value="old('odoogiin_hayg')" required autofocus autocomplete="odoogiin_hayg" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Имэйл') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="success" value="Улс, бүсэд гаргасан амжилтууд" />
                <x-jet-input id="success" class="block mt-1 w-full" type="text" name="success" :value="old('success')" required autofocus autocomplete="success" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Нууц үг') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Нууц үг баталгаажуулах') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Аль хэдийн бүртгэгдсэн?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Бүртгүүлэх') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
