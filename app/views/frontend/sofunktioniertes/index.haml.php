!!!
%html.no-js{:lang => "en"}
    %head
        %meta{:charset => "utf-8"}
        %title= 'This is HAML'
        %meta{:name => "description", :content => ""}
        %meta{:name => "viewport", :content => "width=device-width, initial-scale=1"}

        - stylesheet_link_tag()
        - javascript_include_tag()
    %body   
    .container 
        %section.header
            %h1 Einfach ein Test in Boostrap           
        
            %p 
                Das ist ein Test           
            %ul
                - foreach($sofunktioniertes as $f)
                    %li= $f->title  

                    %script{:src => "assets/frontend/plugins/jquery-1.10.2.min.js"}
                    %address
                    %strong Twitter, Inc.
                    %br/
                    795 Folsom Ave, Suite 600
                    %br/
                    San Francisco, CA 94107
                    %br/
                  
                
                
            




