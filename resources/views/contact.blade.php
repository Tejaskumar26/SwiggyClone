<x-app-layout>
    <h1>Contact Us</h1><br>
    <form action="contactus" method="POST">
        @csrf
        <label for="name"><span>Name</span></label>
        <input type="text" id="name" name="name"  />
        @error('name')
        <p style="color: red; margin-bottom:5px; ">{{ $message }}</p>
        @enderror<br>
        <br><label for="email"><span>Email</span></label>
        <input type="text" id="email" name="email"  />
        @error('email')
        <p style="color: red; margin-bottom:5px; ">{{ $message }}</p>
        @enderror<br>
        <br><label for="subject"><span>Subject</span></label>
        <input type="text" id="Subject" name="subject" />
        @error('subject')
        <p style="color: red; margin-bottom:5px; ">{{ $message }}</p>
        @enderror<br>
        <br><label for="message"><span>Message</span></label>
        <textarea id="message" name="message"></textarea>
        @error('message')
        <p style="color: red; margin-bottom:5px; ">{{ $message }}</p>
        @enderror<br><br>
        <!-- <input type="submit" value="Submit"/> -->
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
</x-app-layout>