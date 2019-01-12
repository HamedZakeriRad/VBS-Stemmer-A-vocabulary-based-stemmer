# VBS-Stemmer-A-vocabulary-based-stemmer
VBS Stemmer: A vocabulary-based stemmer

# Requirements
PHP > 7.0

SQLite3 extention

exec function

# Installation
This Stemmer is written in PHP. The Vocabulary is based on WordNet 3. VBS Stemmer needs access to MySQL to extract the Words from the vocabulary.

SQLite:
It is active by default, you don't need to do anything.

MySQL: 
1) Create a Database in MySQL and Restore the Vocabulary.sql file (in the MySQL File Folder) into the Database.
2) Edit Config.php file located in the classes folder and change the MySQL access details based on your Database.
3) Initialize $VbsStemmer->$DbType = "MySQL"; 


Edit 

# VBS-Stemmer
Stemming is referred to a procedure of reducing all words appearing in different morphological variants to a common form. The Vocabulary Based Stemmer (VBS) is the alternative solution to the stemming problem for the applications which are based on the semantic relation between words or dictionary based, and need valid words (VBS stemmer never creates an unrecognized word, simply because of using the WordNet based vocabulary to identify the words).

VBS Stemmer is based on Affix removal method, the method of Affix removal in VBS Stemmer is based on two principles; one is iterations and the other is longest suffix match. It removes suffix of the word in each loop step by step. Iteration is about removing all possible suffixes if a word has got more than one suffix. The longest suffix match principle says that within any given class of endings, the one which has got the longest ending should be removed first if more than one end provides a match.
The stemming algorithm built from two separate stemming processes:

1)	The first process is based on the irregular verbs, exceptions and special words.
2)	The second part of the stemming process is to stem the words in each suffix category, the words which are not part of the irregular verbs, exceptional words and special words list. These words can be correctly stemmed according to the stemming rules implemented in the stemming algorithm
 
# To learn more about VBS-Stemmer please refer to the published paper:

https://www.sciencepubco.com/index.php/ijet/article/view/9192

# How to Cite:
Please reffer to the published paper for Citation.
