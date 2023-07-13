#! C:\Users\Usuario\AppData\Local\Programs\Python\Python39\python.exe
import cgi
from base64 import b64decode
import face_recognition
formData = cgi.FieldStorage()
face_match=0

image=formData.getvalue("current_image")
email=formData.getvalue("email")
data_uri = image
header, encoded = data_uri.split(",", 1)
data = b64decode(encoded)

with open("image.png", "wb") as f:
    f.write(data)

got_image = face_recognition.load_image_file("image.png")

existing_image = face_recognition.load_image_file("Usuarios/"+email+".jpg")

got_image_facialfeatures = face_recognition.face_encodings(got_image)[0]

existing_image_facialfeatures = face_recognition.face_encodings(existing_image)[0]

results= face_recognition.compare_faces([existing_image_facialfeatures],got_image_facialfeatures)

if(results[0]):
    face_match=1
    print("Content-Type: text/html")
    print("Location: /Votaciones2023-SW-1/Main_app/Usuario/index1.php")
    print()
else:
    face_match=0
    print("Content-Type: text/html")
    print("Location: /Votaciones2023-SW-1/Main_app/Usuario/error.php")
    print()

#print("Content-Type: text/html")
#print("Location: /Proyecto2-ISW-1/Main_app/Usuario/index1.php")
#print()

if(face_match==1):
    print("<script>alert('welcome ",email," ')</script>")
    print('<form action="Votaciones2023-SW-1/Main_app/Usuario/index1.php" method="get">')
    #print('<input type="submit" value="Go to candidatoelectoral.php">')
    #print('</form>')
else:
    print("<script>alert('face not recognized')</script>")
    print('<form action="Votaciones2023-SW-1/Main_app/Usuario/error.php" method="get">')