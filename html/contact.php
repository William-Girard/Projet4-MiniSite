<?php include('header2.php'); ?>
    </header>
    </header>
    <main>

    <h2 class="text-center mt-5 "> Formulaire de contact</h2>

        <form name="myForm" action="/file.php" onsubmit="return validateForm()" method="post">
            <table class="form-style">
                <tr>
                    <td>
                        <label>
                            Votre nom <span class="required">*</span>
                        </label>
                    </td>
                    <td>
                        <input type="text" name="name" class="long"/>
                        <span class="error" id="errorname"></span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>
                            Votre adresse e-mail <span class="required">*</span>
                        </label>
                    </td>
                    <td>
                        <input type="email" name="email" class="long"/>
                        <span class="error" id="erroremail"></span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>
                            Message <span class="required">*</span>
                        </label>
                    </td>
                    <td>
                        <textarea name="message" class="long field-textarea"></textarea>
                        <span class="error" id="errormsg"></span>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input class="btn btn-primary" type="submit" value="Envoyer">
                        <input class="btn btn-primary" type="reset" value="RĂ©initialiser">
                    </td>
                </tr>
            </table>
        </form>
    </main>
    <footer>
    <?php include('footer.php'); ?>