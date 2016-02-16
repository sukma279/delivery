{{ tag_html("div",["class": "page-header"])}}
    {{ tag_html('h1')}} Login{{ tag_html_close('h1')}}
{{tag_html_close("div")}}

      <div class="container">
    <div class="row">
        <div class=" col-md-4 login-from">
            
            {{ form('login/proseslogin', 'role': 'form') }}
            <form action="check-login.php" method="post">
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Username"/>
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password" />
                </div>
                <div class="text-right">
                    <button class="btn btn-primary">Login</button>
                </div>
                <div class="text-right">
                    {{ content() }}
                </div>
            </form>
                
        </div>
    </div>
</div> <!-- End container -->
  
 