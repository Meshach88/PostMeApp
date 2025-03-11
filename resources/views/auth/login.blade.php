<x-layout>

    <form method="POST" action="/login">
        @csrf
        <fieldset>
            <label for="email">Email:</label><br>
            <input type="email" name="email" id="email" :value="old('email')" required><br>
            @error('email')
                {{ $message }}
            @enderror
            <br>
            <label for="password">Password:</label><br>
            <input type="text" name="password" id="password" placeholder="Your password"><br>
            @error('password')
                {{ $message }}
            @enderror
            
            <button type="submit">Login</button>
        </fieldset>

    </form>


</x-layout>
