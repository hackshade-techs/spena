@component('mail::message')
![St. Peter's Secondary School Naalya](assets/img/transparent.png "St. Peter's Secondary School Naalya")
# Spena Alumni Registration Notification

---

## Information of Registered Alumni.


---

1. Name : {{ $alumni->firstname }} {{ $alumni->lastname }}
2. Email : {{ $alumni->email }}
3. Phone : {{ $alumni->contact }}
4. Institution : {{ $alumni->institution }}
5. Occupation : {{ $alumni->occupation }}
6. Gender : {{ $alumni->gender }}
7. Date of Birth : {{ $alumni->dob }}
8. Address : {{ $alumni->address }}
9. Date Joined School : {{ $alumni->entry_date }}
10. Date Left School : {{ $alumni->exit_date }}


@component('mail::button', ['url' => 'http://spena.sc.ug/'])
Click here to go to the website
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
