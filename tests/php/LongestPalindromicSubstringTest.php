<?php

namespace LeetCode\Tests;

use PHPUnit\Framework\TestCase;
use LeetCode\Problems\LongestPalindromicSubstring\LongestPalindromicSubstring;

final class LongestPalindromicSubstringTest extends TestCase
{
    public function testLongestPalindromicSubstringExample1()
    {
        $longestPalin = new LongestPalindromicSubstring();
        $this->assertSame('aba', $longestPalin->longestPalindrome('abac'));
        $this->assertSame('bab', $longestPalin->longestPalindrome('babad'));
        $this->assertSame('bb', $longestPalin->longestPalindrome('cbbd'));
        $this->assertSame('a', $longestPalin->longestPalindrome('a'));
        $this->assertSame('a', $longestPalin->longestPalindrome('ac'));
        $this->assertSame('bb', $longestPalin->longestPalindrome('bb'));
        $this->assertSame('2202022', $longestPalin->longestPalindrome('222020221'));
        $this->assertSame('vwwv', $longestPalin->longestPalindrome("qbmhukucteihghldwdobtvgwwnhflpceiwhbkmvxavmqxedfndegztlpjptpdowwavemasyrjxxnhldnloyizyxgqlhejsdylvkpdzllrzoywfkcamhljminikvwwvqlerdilrdgzifojjlgeayprejhaequyhcohoeonagsmfrqhfzllobwjhxdxzadwxiglvzwiqyzlnamqqsastxlojpcsleohgtcuzzrvwzqugyimaqtorkafyebrgmrfmczwiexdzcokbqymnzigifbqzvfzjcjuugdmvegnvkgbmdowpacyspszvgdapklrhlhcmwkwwqatfswmxyfnxkepdotnvwndjrcclvewomyniaefhhcqkefkyovqxyswqpnysafnydbiuanqphfhfbfovxuezlovokrsocdqrqfzbqhntjafzfjisexcdlnjbhwrvnyabjbshqsxnaxhvtmqlfgdumtpeqzyuvmbkvmmdtywquydontkugdayjqewcgtyajofmbpdmykqobcxgqivmpzmhhcqiyleqitojrrsknhwepoxawpsxcbtsvagybnghqnlpcxlnshihcjdjxxjjwyplnemojhodksckmqdvnzewhzzuswzctnlyvyttuhlreynuternbqonlsfuchxtsyhqlvifcxerzqepthwqrsftaquzuxwcmjjulvjrkatlfqshpyjsbaqwawgpabkkjrtchqmriykbdsxwnkpaktrvmxjtfhwpzmieuqevlodtroiulzgbocrtiuvpywtcxvajkpfmaqckgrcmofkxynjxgvxqvkmhdbvumdaprijkjxxvpqnxakiavuwnifvyfolwlekptxbnctjijppickuqhguvtoqfgepcufbiysfljgmfepwyaxusvnsratn"));
        $this->assertSame('aaaa', $longestPalin->longestPalindrome('aaaa'));
    }
}
