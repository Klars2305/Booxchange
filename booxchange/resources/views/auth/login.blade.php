<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BooXchange</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}" />
    <link rel="icon" type="image/x-icon" href="bini.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    
</head>
<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <!-- Sign In Form -->
                 
                <form action="{{route('login')}}" method="POST" class="sign-in-form" >
                    @csrf
                    <h2 class="title">Sign In</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="email" placeholder="Email" required />
                        @error('email')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" placeholder="Password" required />
                        @error('password')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </div>
                    <input type="submit" value="Login" class="btn solid"/>
                    @if(session('error'))
                        <div class="error">{{ session('error') }}</div>
                    @endif
                </form>

                <!-- Sign Up Form -->
                <form action="{{route('register')}}" method="POST" class="sign-up-form">
                    @csrf
                    <h2 class="title">Sign Up</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="student_id" placeholder="Student ID" required />
                        @error('student_id')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="name" placeholder="Full Name" required />
                        @error('name')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="input-field">
                        <i class="fas fa-building"></i>
                        <select name="institute" style="background-color: transparent; 
                            outline: none; 
                            border: none; 
                            padding-left: 0px; 
                            color: #a8a5ac; 
                            font-family: 'Poppins', sans-serif;
                            font-size: 18px;" required>
                            <option disabled selected>Institute</option>
                            <option value="IC">Institute of Computing</option>
                            <option value="ILEGG">Institute of Leadership and Good Governance</option>
                            <option value="IAAS">Institute of Aquatic and Applied Sciences</option>
                            <option value="ITED">Institute of Teachers Education</option>
                        </select>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-graduation-cap"></i>
                        <select name="program" style="background-color: transparent; 
                            outline: none; 
                            border: none; 
                            padding-left: 0px; 
                            color: #a8a5ac; 
                            font-family: 'Poppins', sans-serif;
                            font-size: 18px;" required>
                            <option disabled selected>Program</option>
                            <option value="program1">Program 1</option>
                            <option value="program2">Program 2</option>
                            <option value="program3">Program 3</option>
                        </select>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-venus-mars"></i>
                        <select name="sex" style="background-color: transparent; 
                            outline: none; 
                            border: none; 
                            padding-left: 0px; 
                            color: #a8a5ac; 
                            font-family: 'Poppins', sans-serif;
                            font-size: 18px;" required>
                            <option disabled selected>Sex</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" placeholder="Email" required />
                        @error('email')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" placeholder="Password" required />
                        @error('password')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password_confirmation" placeholder="Confirm Password" required />
                        @error('password_confirmation')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </div>
                    <input type="submit" value="Sign Up" class="btn solid" />
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <img src="{{ asset('/images/BookXchange.png') }}" style="height: 200px;">
                    <h3>New here?</h3>
                    <p>Join Booxchange today and dive into a world of book lovers and exclusive features!</p>
                    <button class="btn transparent" id="sign-up-btn">Sign Up</button>
                </div>
                <img src="./img/log.svg" class="image" alt="">
            </div>

            <div class="panel right-panel">
                <div class="content">
                    <img src="{{ asset('/images/BookXchange.png') }}" style="height: 200px;">
                    <h3>One of us?</h3>
                    <p>Log in to Booxchange now and reconnect with the features you love!</p>
                    <button class="btn transparent" id="sign-in-btn">Sign In</button>
                </div>
                <img src="./img/register.svg" class="image" alt="">
            </div>
        </div>
    </div>

    <script src="{{ asset('/js/app.js') }}"></script>
</body>
</html>
