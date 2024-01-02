import img2pdf
import os

try:
	os.mkdir("temp/")
	os.mkdir("pdf/")
except:
	pass
# opening from filename
path = "temp/"
for file_name in os.listdir(path):
	file_name = os.path.splitext(f"temp/{file_name}")[0]
	file_name = file_name[file_name.find("/")+1:]
	try:
		with open(f"pdf/{file_name}.pdf","wb") as f:
			f.write(img2pdf.convert(f'temp/{file_name}.jpg'))
	except:
		print("error")