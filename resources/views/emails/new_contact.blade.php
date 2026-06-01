<div style="font-family: Arial, sans-serif">

    <h2>
        New Contact Message
    </h2>

    <p>
        A visitor submitted a message
        from the PIWC Hull website.
    </p>

    <hr>

    <p>
        <strong>Name:</strong>
        {{ $contact->full_name }}
    </p>

    <p>
        <strong>Email:</strong>
        {{ $contact->email }}
    </p>

    <p>
        <strong>Subject:</strong>
        {{ $contact->subject }}
    </p>

    <p>
        <strong>Message:</strong>
    </p>

    <p>
        {{ $contact->message }}
    </p>

</div>
