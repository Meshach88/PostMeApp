<x-layout>

    <form method="POST" action="/register">
        @csrf
        <fieldset>
            <label for="name">Name:</label><br>
            <input type="text" name="name" id="name" placeholder="Your full name"><br>
            <label for="email">Email:</label><br>
            <input type="email" name="email" id="email" placeholder="Your email"><br>
            @error('email')
                {{ $message }}
            @enderror
            <br>
            <label for="password">Password:</label><br>
            <input type="text" name="password" id="password" placeholder="Your password"><br>
            @error('password')
                {{ $message }}
            @enderror
            <br>
            <label for="name">Confirm Password:</label><br>
            <input type="password" name="password_confirmation" id="password_confirmation"
                placeholder="Confirm your password"><br>

            <button type="submit">Register</button>
        </fieldset>

    </form>


</x-layout>
