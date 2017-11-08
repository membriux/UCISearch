
# Creator: Guillermo Sanchez

from urllib.request import urlopen
from bs4 import BeautifulSoup



if __name__ == "__main__":
    """
    This module acquires the information of a student that is searched 
    using their UCI Net ID, which is unique for every student and returns
    a list of that student's information.
    """
    person_info = list()

    uci_id = input("Enter UCI Net ID: ")
    url = "http://directory.uci.edu/index.php?uid="+uci_id+"&form_type=plaintext"
    response = urlopen(url)
    html = BeautifulSoup(response, 'html.parser')
    for line in html.body:
        if "Name:" in line or "Major:" in line or "Student's Level:" in line:
            person_info.append(line)
    email = "Email: " + uci_id + "@uci.edu"
    person_info.append(email)

    print(person_info)





