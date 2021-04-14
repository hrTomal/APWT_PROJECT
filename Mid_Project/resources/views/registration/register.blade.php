@extends('layouts.main')

@section('content')
    <form method="post" enctype="multipart/form-data">
        @csrf
            <table class="loginform" align="center">
                <tr>
                    <td>
                        @foreach($errors->all() as $er)
                        {{ $er }} <br>
                        @endforeach
                    </td>
                </tr>
                <tr>   
                    <td>Seller Id:</td>
                    <td><input type="int" name="id"></td>
                </tr>
                <tr>
                    <td>Seller Name:</td>
                    <td><input type="text" name="sellerName"></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="text" name="password"></td>
                </tr>
                <tr>
                    <td>Confirm Password:</td>
                    <td><input type="text" name="cpassword"></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="text" name="email"></td>
                </tr>
                <tr>
                    <td>Gender:</td>
                    <td><input type="radio" name="gender" value="Male">Male
                        <input type="radio" name="gender" value="Female">Female
                        <input type="radio" name="gender" value="Female">Others
                    </td>
                </tr>
                <td>Type</td>
                <td>
                    <select name="type" id="emp_type">
                        <option>---Not selected---</option>
                        <option value="Admin">Admin</option>
                        <option value="Buyer">Buyer</option>
                        <option value="Accountant">Accountant</option>
                        <option value="Seller">Seller</option>
                    </select>
                </td>
                <tr>
                    <td>Phone</td>
                    <td><input type="text" name="phone"></td>
                </tr>
                <tr>
                    <td>Salary:</td>
                    <td><input type="text" name="salary" value="0"></td>
                </tr>
                <tr>
                    <td>Profile Image:</td>
                    <td><input type="file" name="myfile"></td>
                </tr>
                <tr>
                    <td>DOB:</td>
                    <td><input type="date" name="dob"></td>
                </tr>
                <tr>
                    <td><br><input type="submit" name="submit" value="save"></td>
                </tr>
            </table>

    </form>
@endsection