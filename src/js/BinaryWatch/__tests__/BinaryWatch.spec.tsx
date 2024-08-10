import { readBinaryWatch } from '..';

describe('Problem read binary watch test', () => {
  test('Should return length 10 combination when input is 1', () => {
    expect(readBinaryWatch(1)).toEqual([
      '0:01',
      '0:02',
      '0:04',
      '0:08',
      '0:16',
      '0:32',
      '1:00',
      '2:00',
      '4:00',
      '8:00',
    ]);
  });
});
