<div class="container">
    <form action="action_page.php">

        <label for="fname">First Name</label><br />
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
        <br /><br />
        <label for="lname">Last Name</label><br />
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
        <br /><br />
        <label for="country">Country</label><br />
        <select id="country" name="country"><br /><br />
            <option value="australia">Australia</option>
            <option value="canada">Canada</option>
            <option value="usa">USA</option>
        </select>
        <br /><br />
        <label for="subject">Subject</label><br /><br />
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
        <br /><br />
        <input type="submit" value="Submit">
        <br />
    </form>
</div>
