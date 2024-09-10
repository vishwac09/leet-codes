import { reverseWords } from '..';

describe('Problem reverse words in a string', () => {
  test('Should return output as string', () => {
    expect(reverseWords("Let's take LeetCode contest")).toBe("s'teL ekat edoCteeL tsetnoc");
  });
  test('Random cases', () => {
    expect(reverseWords('Mr Ding')).toBe('rM gniD');
  });
});
