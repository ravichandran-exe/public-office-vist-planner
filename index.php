<html>
<head>
    
    
    <title>Public Office Visit Planner</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <h1>Public Office Visit Planner</h1>
        <p>Smart Citizen Service Guide</p>
    </header>

    <main class="container">

        <h2>Find Government Service Information</h2>

        <p>Select a service to know its documents, fees and processing time.</p>

        <div class="search-area">

            <label for="service">Select Government Service:</label>

            <select id="service">
                <option value="">-- Select a Service --</option>
                <option value="passport">Passport Application</option>
                <option value="driving">Driving Licence</option>
                <option value="aadhaar">Aadhaar Enrolment</option>
                <option value="aadhaarUpdate">Aadhaar Update</option>
                <option value="pan">PAN Card Application</option>
                <option value="voter">Voter ID Application</option>
                <option value="birth">Birth Certificate</option>
                <option value="death">Death Certificate</option>
                <option value="caste">Caste Certificate</option>
                <option value="income">Income Certificate</option>
                <option value="ration">Ration Card</option>
                <option value="marriage">Marriage Certificate</option>
                <option value="police">Police Clearance Certificate</option>
                <option value="property">Property Registration</option>
            </select>

            <button onclick="searchService()">Search</button>

        </div>

        <div id="result" class="result">
            <h3>Welcome!</h3>
            <p>Select a government service and click Search to view its details.</p>
        </div>

        <p class="note">
            Note: Fees and processing times are approximate estimates.
            Actual requirements may vary by state, office and applicant.
            Always verify details with the official government authority.
        </p>

    </main>

    <footer>
        <p>Public Office Visit Planner | College Minor Project</p>
    </footer>

    <script>

        const services = {

            passport: {
                name: "Passport Application",
                documents: "Proof of Date of Birth, Address Proof, Aadhaar Card (if available), and required supporting documents.",
                fee: "₹1,500 for a normal 36-page passport (standard adult application).",
                time: "Approximately 15–30 working days; police verification may affect the timeline.",
                office: "Passport Seva Kendra / Post Office Passport Seva Kendra.",
                timing: "Generally Monday to Friday, by appointment. Check the selected centre's schedule.",
                procedure: "Register on Passport Seva, fill out the application, pay the fee, book an appointment and visit the selected centre."
            },

            driving: {
                name: "Driving Licence",
                documents: "Age Proof, Address Proof, Learner's Licence, Passport-size Photograph (if required).",
                fee: "Learner's Licence ₹150 per vehicle class; driving test ₹300; driving licence issue ₹200. Other charges may apply.",
                time: "Approximately 7–30 working days after completing the required tests.",
                office: "Regional Transport Office (RTO).",
                timing: "Generally Monday to Friday, around 10 AM to 5 PM. Local timings may differ.",
                procedure: "Apply through Parivahan, submit documents, complete the learner's licence requirements and book the driving test."
            },

            aadhaar: {
                name: "Aadhaar Enrolment",
                documents: "Proof of Identity and Proof of Address from UIDAI's accepted document list.",
                fee: "Free for new Aadhaar enrolment.",
                time: "Up to 180 days for generation and delivery.",
                office: "Aadhaar Enrolment Centre.",
                timing: "Generally Monday to Saturday during centre working hours. Check the selected centre.",
                procedure: "Visit an Aadhaar Enrolment Centre, submit documents, provide biometric details and collect the acknowledgement slip."
            },

            aadhaarUpdate: {
                name: "Aadhaar Update",
                documents: "Aadhaar Number and relevant proof of identity, address or date of birth, depending on the update.",
                fee: "Generally ₹75 for demographic updates and ₹125 for biometric updates. Check current UIDAI charges.",
                time: "Usually within 30 days for most update requests.",
                office: "Aadhaar Seva Kendra / Aadhaar Enrolment Centre.",
                timing: "Depends on the selected centre.",
                procedure: "Book an appointment if available, visit the centre, submit the required proof and collect the acknowledgement slip."
            },

            pan: {
                name: "PAN Card Application",
                documents: "Proof of Identity, Proof of Address and Proof of Date of Birth.",
                fee: "Varies by application method and delivery option. Domestic physical PAN applications generally have a fee around ₹107.",
                time: "Approximately 15–20 days as a planning estimate.",
                office: "Online application through an authorised PAN service provider.",
                timing: "Online applications are available 24 hours.",
                procedure: "Apply through an authorised PAN portal, submit the details and documents, pay the fee and track the application."
            },

            voter: {
                name: "Voter ID Application",
                documents: "Recent Photograph, Age Proof and Address Proof.",
                fee: "Free for new voter registration.",
                time: "Approximately 15–30 days as a planning estimate; verification may take longer.",
                office: "Election Office / Electoral Registration Office.",
                timing: "Generally during government office hours.",
                procedure: "Fill Form 6 on the Voters' Service Portal or submit it to the Electoral Registration Officer."
            },

            birth: {
                name: "Birth Certificate",
                documents: "Hospital Birth Record, Parent Identity Proof, Address Proof and required application form.",
                fee: "Depends on the local municipal authority and registration delay.",
                time: "Approximately 1–7 working days when the birth is already registered.",
                office: "Municipal Corporation / Gram Panchayat / Birth Registrar.",
                timing: "Generally Monday to Friday, around 10 AM to 5 PM.",
                procedure: "Submit the birth registration details and supporting documents to the local birth registrar or use the relevant state portal."
            },

            death: {
                name: "Death Certificate",
                documents: "Hospital Death Report (if applicable), Deceased Person's Details, Applicant ID Proof and Application Form.",
                fee: "Depends on the local authority and registration delay.",
                time: "Approximately 1–7 working days when the death is already registered.",
                office: "Municipal Corporation / Gram Panchayat / Death Registrar.",
                timing: "Generally Monday to Friday, around 10 AM to 5 PM.",
                procedure: "Submit the death report and required details to the local registrar or use the relevant state portal."
            },

            caste: {
                name: "Caste Certificate",
                documents: "Identity Proof, Address Proof, Caste-related Supporting Documents and Parent's Caste Certificate (if required).",
                fee: "Varies by state.",
                time: "Approximately 7–21 working days as an estimate.",
                office: "Tehsil Office / Revenue Department / State Online Portal.",
                timing: "Generally Monday to Friday, around 10 AM to 5 PM.",
                procedure: "Apply through the state portal or Tehsil Office, upload or submit documents and complete verification."
            },

            income: {
                name: "Income Certificate",
                documents: "Identity Proof, Address Proof, Income Proof, Salary Slip or other income-related documents.",
                fee: "Varies by state.",
                time: "Approximately 7–21 working days as an estimate.",
                office: "Tehsil Office / Revenue Department / State Online Portal.",
                timing: "Generally Monday to Friday, around 10 AM to 5 PM.",
                procedure: "Submit the application with income documents through the state portal or local revenue office."
            },

            domicile: {
                name: "Domicile Certificate",
                documents: "Identity Proof, Address Proof, Residence Proof and other state-specific supporting documents.",
                fee: "Varies by state.",
                time: "Approximately 7–21 working days as an estimate.",
                office: "Tehsil Office / Revenue Department.",
                timing: "Generally Monday to Friday, around 10 AM to 5 PM.",
                procedure: "Apply through the state portal or Tehsil Office and submit the required residence documents."
            },

            ration: {
                name: "Ration Card",
                documents: "Family Members' Aadhaar Details, Address Proof, Identity Proof and Family Photograph (if required).",
                fee: "Generally free for eligible applicants; state-specific charges may apply.",
                time: "Approximately 15–30 working days as an estimate.",
                office: "Food and Civil Supplies Department / Ration Office.",
                timing: "Generally Monday to Friday, around 10 AM to 5 PM.",
                procedure: "Apply through the state food department portal or local ration office and submit family details."
            },

            marriage: {
                name: "Marriage Certificate",
                documents: "Age Proof of Both Partners, Address Proof, Identity Proof, Marriage Photograph and Witness Identity Proof.",
                fee: "Varies by state and registration rules.",
                time: "Approximately 7–30 working days as an estimate.",
                office: "Marriage Registrar / Sub-Registrar Office.",
                timing: "Generally Monday to Friday, around 10 AM to 5 PM.",
                procedure: "Submit the marriage registration application, documents and witness details, then attend verification or appointment."
            },

            police: {
                name: "Police Clearance Certificate",
                documents: "Passport, Address Proof and other documents requested for the purpose of the certificate.",
                fee: "Generally ₹500 for a Passport Seva PCC application.",
                time: "Approximately 1–4 weeks; police verification may affect the timeline.",
                office: "Passport Seva Kendra / Regional Passport Office.",
                timing: "Generally by appointment at the selected centre.",
                procedure: "Apply through Passport Seva, pay the fee, book an appointment and attend document verification."
            },

            property: {
                name: "Property Registration",
                documents: "Sale Deed, Identity Proof of Buyer and Seller, Property Documents, PAN Details (where applicable) and Witness Details.",
                fee: "Stamp duty and registration charges vary by state and property value.",
                time: "Often completed on the appointment day after successful verification, but delays may occur.",
                office: "Sub-Registrar Office.",
                timing: "Generally Monday to Friday during government office hours; check local office timings.",
                procedure: "Prepare the deed, pay applicable stamp duty and registration charges, book an appointment if required and visit the Sub-Registrar Office."
            }

        };

        function searchService() {

            let selectedService = document.getElementById("service").value;
            let result = document.getElementById("result");

            if (selectedService === "") {
                result.innerHTML = "<h3>Please select a service!</h3><p>Choose a government service from the dropdown.</p>";
                return;
            }

            let service = services[selectedService];

            result.innerHTML = `
                <h2>${service.name}</h2>

                <h3>Required Documents</h3>
                <p>${service.documents}</p>

                <h3>Applicable Fee</h3>
                <p>${service.fee}</p>

                <h3>Estimated Processing Time</h3>
                <p>${service.time}</p>

                <h3>Office to Visit</h3>
                <p>${service.office}</p>

                <h3>Office Timings</h3>
                <p>${service.timing}</p>

                <h3>Application Procedure</h3>
                <p>${service.procedure}</p>
            `;

        }

    </script>

</body>
</html>