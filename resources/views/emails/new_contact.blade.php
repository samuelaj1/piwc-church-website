<div
    style="
        font-family: Arial, sans-serif;
        max-width: 650px;
        margin: auto;
        background: #ffffff;
        border: 1px solid #e5e7eb;
        border-radius: 12px;
        overflow: hidden;
    "
>

    <!-- Header -->
    <div
        style="
            background: #0f5132;
            padding: 25px;
            color: #fff;
        "
    >
        <h2 style="margin:0;">
            📩 New Message
        </h2>

        <p style="margin:10px 0 0 0;">
            A visitor submitted a message
            from the PIWC Hull website.
        </p>
    </div>

    <!-- Content -->
    <div style="padding: 30px;">

        <table
            width="100%"
            cellpadding="10"
            cellspacing="0"
            style="border-collapse: collapse;"
        >

            <!-- Name -->
            <tr style="background:#f9fafb;">
                <td width="180">
                    <strong>Name</strong>
                </td>

                <td>
                    {{ $contact->full_name ?: 'Anonymous' }}
                </td>
            </tr>

            <!-- Email -->
            <tr>
                <td>
                    <strong>Email</strong>
                </td>

                <td>
                    {{ $contact->email ?: 'Not Provided' }}
                </td>
            </tr>

            <!-- Submitted -->
            <tr>
                <td>
                    <strong>Submitted At</strong>
                </td>

                <td>
                    {{ now()->format('d M Y h:i A') }}
                </td>
            </tr>

        </table>

        <!-- Message -->
        <div style="margin-top: 30px;">

            <h3 style="color:#0f5132;">
                Message
            </h3>

            <div
                style="
                    background:#f8f9fa;
                    border-left:4px solid #198754;
                    padding:20px;
                    border-radius:8px;
                    color:#333;
                    line-height:1.8;
                "
            >
                {{ $contact->message }}
            </div>

        </div>

        <!-- Reply Button -->
        @if($contact->email)
            <div style="margin-top:30px; text-align:center;">

                <a
                    href="mailto:{{ $contact->email }}"
                    style="
                        background:#198754;
                        color:#fff;
                        text-decoration:none;
                        padding:14px 24px;
                        border-radius:8px;
                        display:inline-block;
                        font-weight:bold;
                    "
                >
                    Reply to Sender
                </a>

            </div>
        @endif

    </div>

</div>
