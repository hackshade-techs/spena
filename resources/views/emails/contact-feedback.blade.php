@component('mail::message')
![St. Peter's Secondary School Naalya](assets/img/transparent.png "St. Peter's Secondary School Naalya")
# Spena Contact Feedback

---

## Information from the Contact Form.


---

1. Name : {{ $feedback->name }}
2. Email : {{ $feedback->email }}
3. Phone : {{ $feedback->phone }}
4. Subject : {{ $feedback->subject }}

⋅⋅⋅Message: {{ $feedback->message }}

@component('mail::button', ['url' => 'http://spena.sc.ug/'])
Click here to go to the website
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
