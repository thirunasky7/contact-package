<html>

<body>
  <h1>Contact Us Any time</h1>   
    <form action="{{ route('contact') }}" method="post">
    @csrf
        <input type="text" name="name" placeholder="Your Name">
        <input type="email" name="email" placeholder="Your Email">
        <input type="text" name="message" col="30" rows="10" placeholder="Your Message">
        <button type="submit"  value="submit">Submit</button>
    </form>
</body>
</html>