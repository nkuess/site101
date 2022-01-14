@extends('layout.welcome')
@section('page_contact')

    <div class="container">
        <div class="row">
            <div id="content_main" class="col-md-9">
                <div id="yt_component">
                    <article class="item-page" style="background-color:#6BAE62">
                        <div class="page-header">
                            <h1> Nous contacter </h1>
                        </div>
                        <header class="article-header">
                            <h2>
                            </h2>
                        </header>
                        <form action="" method="post" style="width:450px;">
                            @csrf
                            <div class="form-group">
                                <label for="Nom">Nom: </label>
                                <input type="text" name="nom" id="nom" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="Prenom">Prenom: </label>
                                <input type="text" name="prenom" id="prenom" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="Mail">Mail:</label>
                                <input type="mail" name="email" id="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="Contact">Contact:</label>
                                <input type="text" name="" id="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="Message">Message</label>
                                <textarea class="form-control" name="message" id="message" cols="30" rows="10"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Envoyer" class="form-control btn btn-success" style="width:150px;">
                            </div>
                        </form>


                        {{-- <div class="jd-social-share icon_container button_circle hover_2">
                            <ul>
                                <li>
                                    <a class="popup facebook circle icon"
                                        href="http://www.facebook.com/sharer.php?u=https://bit.ly/2H9H2qf&amp;t=Contacts">
                                    </a>
                                </li>
                                <li>
                                    <a class="popup twitter circle icon"
                                        href="http://twitter.com/share?text=Contacts&amp;url=https://bit.ly/2H9H2qf">

                                    </a>
                                </li>
                                <li>
                                    <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=https://bit.ly/2H9H2qf&amp;title=Contacts"
                                        class="popup linkedin circle icon">
                                    </a>
                                </li>
                                <li>
                                    <a class="popup whatsapp"
                                        href="https://api.whatsapp.com/send?text=Contacts%20https%3A%2F%2Fbit.ly%2F2H9H2qf">

                                    </a>
                                </li>
                            </ul>
                        </div> --}}

                    </article>

                </div>
            </div>
            
        </div>
    </div>


@endsection
