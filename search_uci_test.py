import sys
from search_uci import remove_keywords_lines
from search_uci import checker
import unittest

class Test_search_uci(unittest.TestCase):

    def setUp(self):
        pass
    def test_case_student(self):
        given_list = ['Plaintext output for UID=josueal1', '', 'E-mail: josueal1@uci.edu', '', 'UCInetID: josueal1', '', 'Name: Josue Alexander Lopez', '', 'E-mail:', '', 'Delivery Point: ', '', 'Major: CSE']
        self.assertEqual(remove_keywords_lines(given_list),['', 'E-mail: josueal1@uci.edu', '', 'UCInetID: josueal1', '', 'Name: Josue Alexander Lopez', '', 'E-mail:', '', '', 'Major: CSE'])
    '''
    def test_case_checker_1(self):
        self.assertTrue(checker(['Plaintext','Delivery'],'Plaintext output for UID=josueal1'))
    def test_case_checker_2(self):
        self.assertTrue(checker(['Delivery','Plaintext'],'Plaintext output for UID=josueal1'))
    def test_case_checker_3(self):
        self.assertTrue(checker(['Plaintext','Delivery'],'Delivery Point: '))
    def test_case_checker_4(self):
        self.assertTrue(checker(['Delivery','Plaintext'],'Delivery Point: '))
    def test_case_checker_5(self):
        self.assertFalse(checker(['Delivery','Plaintext'],'Point: '))
    def test_case_checker_6(self):
        self.assertFalse(checker(['Delivery','Plaintext'],''))
    '''
if __name__ == '__main__':
    unittest.main()
