import smtplib, ssl
from email.mime.text import MIMEText
sender = input( "Sender mail :")
receivers = input("Reciver mail :")
body_of_email = input("Body of email :")
msg = MIMEText(body_of_email, 'html')
msg[‘Subject’] = ‘Subject line goes here’
msg[‘From’] = sender
msg[‘To’] = ‘,’.join(receivers)
s = smtplib.SMTP_SSL(host = ‘smtp.gmail.com’, port = 465)
s.login(user = sender , password = input("enter your password"))
s.sendmail(sender, receivers, msg.as_string())
s.quit()
