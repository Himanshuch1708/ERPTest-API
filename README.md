# Sample Order (SO) and Sample Order Delivery Note (SODN) Flow

## Overview
This repository contains the flow documentation for managing Sample Orders (SO) and Sample Order Delivery Notes (SODN). The process involves various tasks from initiating sample requests to delivering sample orders to customers.

## Process Flow
The process flow consists of two main components: Sample Order (SO) and Sample Order Delivery Note (SODN). Below is a detailed description of each component and its tasks:

### Sample Order (SO)
1. **Open Sample Request - Swatch Request SO-1**: Initiate a sample request and swatch request.
2. **Raise Invoice for Samples and send to customer for approval SO-2**: Generate an invoice for samples and send it to the customer for approval.
3. **Submit Material Indent SO-3**: Submit a material indent for sample production.
4. **Last & Insole & Sole & Heel Development SO-4**: Develop last, insole, sole, and heel for sample production.
5. **Pattern Development & Make Prototype & Take app from Ashish & Send Photo to Buyer SO-5**: Develop patterns, create prototypes, obtain approval from Ashish, and send photos to the buyer.
6. **Email Images for Proto Approval By Customer SO-6**: Email images to the customer for prototype approval.
7. **Full Kit Ready SO-7**: Ensure the full kit is ready for sample production.
8. **Cutting - SO-9**: Perform cutting for sample production.
9. **Upper, Lasting Kitting - SO-10**: Perform upper and lasting kitting for sample production.
10. **Finish - SO-11**: Complete finishing touches for sample production.
11. **Prepare Dispatch sheet , Labels , Do sample Inspection as per buyer Comments , Dispatch Sheet sign - SO-14**: Prepare dispatch sheets, labels, and perform sample inspection as per buyer comments. Sign the dispatch sheet.
12. **Sample Order Overdue - SO-15**: Manage overdue sample orders.

![SO FLOW](https://github.com/Himanshuch1708/ERPTest-API/blob/main/so_flow.png)


### Sample Order Delivery Note (SODN)
1. **Click Photo, Rename, Add to Folder, Edit Add images to dispatch sheet - delivery Note - SODN-1**: Click photos, rename them, add them to a folder, and edit to add images to the dispatch sheet.
2. **Keep Ref Sample - Swatch CFM - PPS Only SODN-2**: Keep reference samples for Swatch CFM - PPS only.
3. **Add AWB details to SODN, Send Email to customer with Dispatch Details, workbook SODN-3**: Add AWB details to the SODN, send an email to the customer with dispatch details, and update the workbook.
4. **Send Final Sample invoice to customer SODN-4**: Send the final sample invoice to the customer.
5. **Feedback from Customer SODN-5**: Gather feedback from the customer.
6. **Acknowledge CFM - PPS comments email and send update WORKBOOK to the customer , add WORKBOOK to folder SODN-10**: Acknowledge CFM - PPS comments via email, send updates to the workbook to the customer, and add the workbook to a folder.
7. **Acknowledge CFM - PPS CommentS SODN-16**: Acknowledge CFM - PPS comments.
8. **Acknowledge CFM - PPS Comments & Add to Risk Asst. & Discuss with Tooling - RnD SODN-17**: Acknowledge CFM - PPS comments, add them to risk assessment, and discuss with tooling and R&D.
9. **Samples Pending for Studio Photography SODN-21**: Handle samples pending for studio photography.
10. **Samples to be added to Catalog SODN-22**: Add samples to the catalog.
11. **CFM-PPS Approval from Customer updates in ERP and doc submitted SODN-6**: Update CFM-PPS approval from the customer in ERP and submit documents.

![SODN FLOW](https://github.com/Himanshuch1708/ERPTest-API/blob/main/sodn_flow.png)

### Interconnections
- **SO-5** and **SODN-1**: Photos taken in SO-5 are used in SODN-1.
- **SO-6** and **SODN-3**: Email images sent in SO-6 are incorporated into the dispatch details in SODN-3.
- **SO-12** and **SODN-4**: Final sample invoices sent in SO-12 are referenced in SODN-4.

![So -> SODN](https://github.com/Himanshuch1708/ERPTest-API/blob/main/so_sodn.png)