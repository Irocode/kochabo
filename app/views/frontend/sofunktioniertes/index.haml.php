#example_header
  %h1 This is HAML
#example_section
  %p It's really easy
  %ul
    %li.first You use shorthand like %h1 (for tags), #heading (for IDs), and .special (for classes)
    %li You don't use closing tags
    %li You use whitespace
    %li.last 
      You use Rubyhashes to call attributes so you can create links like this
      %a{:href => "google.com"}link to Google.