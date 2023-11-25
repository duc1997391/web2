<article class="content-1170 center-relative">
    <div class="content-wrapper">
        <div class="entry-content">
            <div class="one_half ">
                <p><strong>Stay in touch</strong></p>
                <p>We choose to go to the moon in this decade and do the other things, not because they are easy.</p>
                <br>
                <p>Because they are hard, because that goal will serve to organize and measure the best of our energies and skills, because that challenge is one that we are willing to accept, one we are unwilling to postpone and one.</p>
                <br>
                <p>
                    <span style="color: #cdc8c1;">Address:</span>&nbsp;New York, NY, United States
                    <br>
                    <span style="color: #cdc8c1;">Phone:</span> +1 234-567-890
                    <br>
                    <span style="color: #cdc8c1;">Hours:</span> 6:00 am – 2:00 am
                    <br>
                </p>
            </div>
            <div class="one_half last ">
                <form class="contact-form" method="POST" action="./?page=submit">
                    <p><input required id="name" type="text" name="name" placeholder="Name"></p>
                    <p><input required id="contact-email" type="email" name="email" placeholder="Email"></p>
                    <p><input required type="password" name="password" placeholder="Password"></p>
                    <p><input required type="tel" name="phone" placeholder="Phone Number"></p>
                    <div>
                        <label >Gender: </label>
                        <ul>
                            <li>
                                <input type="radio" id="f-option" name="gender" value="male" checked>
                                <label for="f-option">Male</label>
                                
                                <div class="check"></div>
                            </li>
                            
                            <li>
                                <input type="radio" id="s-option" name="gender" value="female">
                                <label for="s-option">Female</label>
                                
                                <div class="check"><div class="inside"></div></div>
                            </li>
                            
                            <li>
                                <input type="radio" id="t-option" name="gender" value="other">
                                <label for="t-option">Other</label>
                                
                                <div class="check"><div class="inside"></div></div>
                            </li>
                        </ul>
                    </div>
                    <p><select required name="language">
                        <option value="" selected hidden>Select language</option>
                        <option value="EN">English</option>
                        <option value="VN">Tiếng Việt </option>
                    </select></p>
                    <p><input required type="number" name="zipcode" placeholder="Zip Code"></p>
                    <p><textarea name="about" placeholder="Write about yourself..."></textarea></p>
                    <p><input type="submit" value="Register"></p>
                </form>
                <style>
                    form label {
                        margin: 0 15px 0 0;
                        font-size: 18px;
                        font-size: 18px;
                        color: #cdc8c1;
                        font-weight: 400;
                    }
                    ul, ul li {
                        position: relative;
                        display: inline-block;
                    }
                    ul li input[type=radio]{
                        position: absolute;
                        visibility: hidden;
                        }

                        ul li label{
                        display: block;
                        position: relative;
                        font-weight: 300;
                        font-size: 18px;
                        padding: 0 5px 0 30px;
                        margin: 0;
                        height: 30px;
                        z-index: 9;
                        color: #cdc8c1;
                        cursor: pointer;
                        -webkit-transition: all 0.25s linear;
                        }

                        ul li .check{
                        display: block;
                        position: absolute;
                        border: 3px solid #cdc8c1;
                        border-radius: 100%;
                        height: 10px;
                        width: 10px;
                        top: 10px;
                        left: 10px;
                        z-index: 5;
                        transition: border .25s linear;
                        -webkit-transition: border .25s linear;
                        }

                        ul li .check::before {
                        display: block;
                        position: absolute;
                        content: '';
                        border-radius: 100%;
                        height: 8px;
                        width: 8px;
                        top: 1px;
                        left: 1px;
                        margin: auto;
                        transition: background 0.25s linear;
                        -webkit-transition: background 0.25s linear;
                        }

                        input[type=radio]:checked ~ .check::before{
                        background: #cdc8c1;
                        }
                </style>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</article>