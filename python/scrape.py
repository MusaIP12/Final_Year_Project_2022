from ast import Or
from bs4 import BeautifulSoup as bs
import requests
import json

def scrape():
    fil = ""
    with open(r"C:\Users\njabulo\Documents\Custom Office Templates\home.html", "r") as f:
        f = f.read()
        soup = bs(f, "html.parser")
            

    status = soup.find_all("div", {"class": "course-col"})
    return status

def uni(lis):
    dictionary = {}
    for i in lis:
        #(i)
        for para in i.find_all("p"):
            if ("Open/Closing Date:" in para.text):
                try :
                    a = f"{para.text[18:]}"
                    dictionary[f"{i.find('h3').text}"] = f"{a.split('/')[-1]}"
                except:
                    dictionary[f"{i.find('h3').text}"] = f"{para.text[:]}"
    return dictionary

def main():
    status = scrape()
    #print(uni(status))

    #dictionar = {f"{uni(status)}": f"{stat(status)}"} 

    with open("python/data.json", "w") as f:
        json.dump(uni(status), f, indent=4)

    a = "Open/Closing Date: May/June 2022"
    print(a.split("/")[-1])

if __name__ == "__main__":
    main()

